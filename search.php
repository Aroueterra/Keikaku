<?php
require __DIR__ . '/vendor/autoload.php';

use Jikan\MyAnimeList\MalClient;
// use JikanPHPClient;
// echo " Nice ";
Search();

function Search()
{
  $jikan = new MalClient;
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['search'])) {
      $value = $_POST['searchValue'];
      $type = explode(":", $value, 2);
      $dom = "https://api.jikan.moe/v3/search/";
      $typeA = $type[0];
      $typeB = $type[1];
      $typeB = preg_replace('/\s+/', '%20', $typeB);
      $url = "";
      $fetch = "";
      if ($typeA == "season") {
        $data = explode('[', rtrim($typeB, ']'));
        $season = explode("-", $data[1], 2);
        $period = $season[0];
        $year = $season[1];
        $url = "https://api.jikan.moe/v3/season/$year/$period";
        $fetch = "anime";
      } else {
        $page = "?q=" . $typeB . "&page=1";
        $url = $dom . $typeA . $page;
        $fetch = "results";
      }
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_HEADER, FALSE);
      $response = curl_exec($ch);
      curl_close($ch);
      $json = json_decode($response, true);
      //echo $url;
      //Get the mal id
      for ($i = 0; $i <= 10; $i++) {
        $id = $json[$fetch][$i]['mal_id'];
        $anime = $jikan->getAnime(
          (new \Jikan\Request\Anime\AnimeRequest($id))
        );

        $title = $anime->getTitle();
        $desc = $anime->getSynopsis();
        $img = $anime->getImageUrl();
        $score = $anime->getScore();
        $genre = $anime->getGenres();
        $aired = $anime->getStatus();
        $MALFunc = new MALFunc;
        $information = <<<ENDHEREDOC
      <div class="column level item container ">
  <div class="section is-marginless is-paddingless">
    <div class="card element-item is-horizontal columns wrapping">
      <div
        class="card-image column is-three-quarters"
        style="max-width: 145px;"
      >
        <figure class="image glide-image">
          <!-- IMAGE -->
          <img class="g-img " src="{$img}" alt="sample" />
        </figure>
        <div class="level-left">
         <span class="tag {$MALFunc->SetAirTint($aired)} is-rounded is-marginless ">{$aired}</span>
        </div>
        <div class="level-right">
          <button
            class="button add-title is-pulled-left is-info"
            style="bottom:40px; left: 20px" name="add-item" value="{$id}"
          >
            <span class="icon is-small">
              <i class="fas fa-plus"></i>
            </span>
          </button>
          
        </div>
      </div>
      <div class="card-content column is-two-fifths outer">
        <div class="media">
          <div class="media-content">
            <!-- TITLE -->
            <p class="title col-title is-4">{$title}</p>
            <!-- TAGS -->
            <p class="subtitle tags has-addons is-6">
              <span class="tag is-link is-marginless ">Genre:</span>
              <span class="tag is-info is-marginless">{$MALFunc->GetGenre(0,$genre)}
           </span>
              <span class="tag is-info is-marginless">
              {$MALFunc->GetGenre(1,$genre)}</span>
              <span class="tag is-link is-marginless ">Score:</span>
              <span
                class="tag {$MALFunc->SetScoreTint($score)} is-marginless sc"
                data-value=""
              >{$score}</span>
            </p>
          </div>
        </div>
        <!-- SYNOPSIS -->
        <div
          class="content has-text-justified wrap-length inner"
          id="clamp"
          style="height: 100px; bottom: 10px;"
        >{$desc}</div>
      </div>
    </div>
  </div>
</div>      
ENDHEREDOC;
        echo $information;
      }
    } else {
      //     
      //     echo '<script language="javascript">';
      //     echo 'alert("Not set")';
      //     echo '</script>';
    }
  }
}

class MALFunc
{
  static function GetGenre($i, $genre)
  {
    if (array_key_exists($i, $genre))
      return $genre[$i];
  }
  static function SetScoreTint($score)
  {
    if (!is_null($score))
      if ($score < 5) {
        return "is-danger";
      } else if ($score < 6.9) {
        return "is-warning";
      } else {
        return "is-success";
      }
  }
  static function SetAirTint($aired)
  {
    if (!is_null($aired))
      if ($aired == "Finished Airing") {
        return "is-success is-light";
      } else if ($aired == "Currently Airing") {
        return "is-light";
      } else if ($aired == "Not yet aired") {
        return "is-dark";
      }
  }
  static function PostButton()
  {
    if (isset($_POST['add-item'])) {
      $val = $_POST['add-item'];
      echo $val;
      if (isset($_SESSION['plan'])) {
        array_push($_SESSION['plan'], $val);
      } else {
        $_SESSION['plan'] = array();
        array_push($_SESSION['plan'], $val);
      }
    }
  }
}

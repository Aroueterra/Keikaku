<?php
require __DIR__ . '/vendor/autoload.php';

use Jikan\MyAnimeList\MalClient;
// use JikanPHPClient;
// echo " Nice ";
$meta = LoadTitles();
$datapoints = array();
$labels = array();
$eps = array();
$dur = array();
$length = array();
$rank = array();
$commentList = array();
error_reporting(E_ALL ^ E_WARNING);
for ($counter = 0; $counter < count($meta); $counter++) {
  array_push($labels, truncate($meta[$counter]['anime']['title'], 12));
  $len = ($meta[$counter]['anime']['episodes'] * $meta[$counter]['anime']['duration']);
  array_push($length, $len);
  array_push($eps, $meta[$counter]['anime']['episodes']);
  array_push($dur, $meta[$counter]['anime']['duration']);
  array_push($rank, $meta[$counter]['anime']['rank']);
  $malid = $meta[$counter]['anime']['id'];
  include "modal.php";
}
$highest = max($rank);
for ($i = 0; $i < count($rank); $i++) {
  if ($rank[$i] === $highest) {
    $r = ($rank[$i] - ($highest * .3)) - $highest;
  } else {
    $r = $rank[$i] - $highest;
  }
  $rank[$i] = (-100 / ($highest - 1)) * $r;
}
//for ($counter = 0; $counter < count($meta); $counter++) {
// var_dump($rank);
$Overview = new Overview($labels, $length, $dur, $eps, $meta, $rank);
// var_dump($Overview->get_rank());
// $dataPoints = array(
//   array("y" => 7, "label" => "March"),
//   array("y" => 12, "label" => "April"),
//   array("y" => 28, "label" => "May"),
//   array("y" => 18, "label" => "June"),
//   array("y" => 41, "label" => "July")
// );
// $dataPoints = array(
//   array("y" => 3373.64, "label" => "Germanya"),
//   array("y" => 2435.94, "label" => "France"),
//   array("y" => 1842.55, "label" => "China"),
//   array("y" => 1828.55, "label" => "Russia"),
//   array("y" => 1039.99, "label" => "Switzerland"),
//   array("y" => 765.215, "label" => "Japan"),
//   array("y" => 612.453, "label" => "Netherlands")
// );

// $data = $meta['anime']['title'];
//print("<pre>" . print_r($meta, true) . "</pre>");
function LoadTitles()
{
  $jikan = new MalClient;
  $meta = array();
  $info = array();
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['code'])) {
      $code = $_GET['code'];
      include 'config.php';
      $sql = "SELECT * from plan where code='$code'";
      $mal_ids = array();
      if ($plan = mysqli_query($mysqli, $sql)) {
        if (mysqli_num_rows($plan) > 0) {
          $row = mysqli_fetch_array($plan);
          $mal_ids = explode(",", $row['mal_id']);
          for ($i = 0; $i < count($mal_ids); $i++) {
            $dataPoints = array(
              array("y" => 3373.64, "label" => "Germany"),
            );
            $id = $mal_ids[$i];
            $anime = $jikan->getAnime(
              (new \Jikan\Request\Anime\AnimeRequest($id))
            );
            $status = $jikan->getAnimeStats(
              (new \Jikan\Request\Anime\AnimeStatsRequest($id))
            );
            $animestat = array(
              "watching" => $status->getWatching(), "completed" => $status->getCompleted(),
              "onhold" => $status->getOnHold(), "dropped" => $status->getDropped(), "planned" => $status->getPlanToWatch()
            );
            $animescore = array();
            for ($j = 1; $j <= 10; $j++) {
              array_push($animescore, $status->getScores()[$j]->getVotes());
            }
            $episodes = $anime->getEpisodes();
            $duration = $anime->getDuration();
            $search = ' hr ';
            if (preg_match("/{$search}/i", $duration)) {
              $hours = explode(" hr ", $duration);
              $minutes = explode(" ", $hours[1]);

              $duration = hoursToMinutes($hours[0] . ":" . $minutes[0]);
            } else {
              $minutes = explode(" ", $duration);
              $duration = $minutes[0];
            }
            $title = $anime->getTitle();
            $desc = $anime->getSynopsis();
            $img = $anime->getImageUrl();
            $score = $anime->getScore();
            $genre = $anime->getGenres();
            $aired = $anime->getStatus();
            $rank = $anime->getRank();
            $popularity = $anime->getPopularity();
            $producer = "";
            if (!empty($anime->getProducers()[0])) {
              $producer = $anime->getProducers()[0];
            } else {
              // $producer = "";
            }


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
            class="button modal-button add-title is-pulled-left is-info"
            style="bottom:40px; left: 20px" value="{$id}" data-target="modal-id{$i}" type="button"
          >
            <span class="icon is-small">
            <i class="fas fa-search"></i>
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
            // echo $information;
            $animu = array("id" => $id, "episodes" => $episodes, "title" => $title, "synopsis" => $desc, "image" => $img, "score" => $score, "genre" => $genre, "aired" => $aired, "rank" => $rank, "popularity" => $popularity, "producer" => $producer, "duration" => $duration);
            $final = array("status" => $animestat, "score" => $animescore, "totalstatus" => $status->getTotal(), "totalscore" => $status->getScores(), "anime" => $animu, "info" => $information);
            array_push($meta, $final);
          }
        } else {
          // echo "SQL ERROR: Could not execute $sql. " . mysqli_error($mysqli);
        }
      } else {
        // echo "SQL ERROR: Could not execute $sql. " . mysqli_error($mysqli);
      }

      return $meta;
    }
  }
}
// Transform minutes like "105" into hours like "1:45". 
function minutesToHours($minutes)
{
  $hours = (int) ($minutes / 60);
  $minutes -= $hours * 60;
  return sprintf("%d:%02.0f", $hours, $minutes);
}
function hoursToMinutes($hours)
{
  $minutes = 0;
  if (strpos($hours, ':') !== false) {
    // Split hours and minutes. 
    list($hours, $minutes) = explode(':', $hours);
  }
  return $hours * 60 + $minutes;
}
function truncate($string, $length = 100, $append = "...")
{
  $string = trim($string);

  if (strlen($string) > $length) {
    $string = wordwrap($string, $length);
    $string = explode("\n", $string, 2);
    $string = $string[0] . $append;
  }

  return $string;
}
class Overview
{
  public $duration = 0;
  public $episodes = 0;
  public $length = array();
  public $labels = array();
  public $meta = array();
  public $rank = array();
  function __construct($labels, $length, $duration, $episodes, $meta, $rank)
  {
    $this->labels = $labels;
    $this->length = $length;
    $this->duration = $duration;
    $this->episodes = $episodes;
    $this->meta = $meta;
    $this->rank = $rank;
  }
  function get_duration()
  {
    return $this->duration;
  }
  function get_episodes()
  {
    return $this->episodes;
  }
  function get_length()
  {
    return $this->length;
  }
  function get_labels()
  {
    return $this->labels;
  }
  function get_meta()
  {
    return $this->meta;
  }
  function get_rank()
  {
    return $this->rank;
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

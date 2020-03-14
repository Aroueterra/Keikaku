<?php
require __DIR__ . '/vendor/autoload.php';

use Jikan\MyAnimeList\MalClient;
// use JikanPHPClient;
// echo " Nice ";
// Search();
PreviewItems();

function PreviewItems()
{
  if (!isset($_SESSION)) {
    session_start();
  }
  if (isset($_SESSION['plan'])) {
    $list = $_SESSION['plan'];
    // var_dump($list);
    $jikan = new MalClient;
    foreach ($list as $item) {
      $anime = $jikan->getAnime(
        (new \Jikan\Request\Anime\AnimeRequest($item))
      );
      $img = $anime->getImageUrl();
      $title = $anime->getTitle();
      $panel = <<<ENDHEREDOC
      <figure class="column image img-wrapper glide-image">
      <div class="title-overlay"></div>
      <div class="img-overlay">
        <button
          class="button is-info is-small btn-delete"
          value="{$item}"
          onclick="btnDelete(this)"
          type="button"
        >
          <span class=" is-small">
            <i class="fas fa-times"></i>
          </span>
        </button>
      </div>
      <img class="s-img " src="{$img}" alt="{$title}" />
    </figure>
ENDHEREDOC;
      echo $panel;
    }
  } else {
  }
}

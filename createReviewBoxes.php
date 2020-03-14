<?php
require __DIR__ . '/vendor/autoload.php';

use Jikan\MyAnimeList\MalClient;

PreviewItems();

function PreviewItems()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    if (isset($_SESSION['plan'])) {
        $fn = function ($data) {
            if ($data == 0) return ""; 
            // <p class='help'> Type your review score anywhere (1-10) in brackets, ex: [7.2] </p>
        };
        $list = $_SESSION['plan'];
        // var_dump($list);
        $jikan = new MalClient;
        $printed = 0;
        echo "<div id='fordelete'>";
        $i=0;
        foreach ($list as $item) {
            $anime = $jikan->getAnime(
                (new \Jikan\Request\Anime\AnimeRequest($item))
            );
            $title = $anime->getTitle();
            $i++;
            $textarea = <<<ENDHEREDOC
            <div class="field is-horizontal">
            <div class="field-label is-large">
              <label class="label"></label>
            </div>
            <div class="field-body">
              <div class="field is-expanded">
                <!-- TITLE -->
                <p class="help is-size-6">
                  Title: <strong>{$title}</strong>
                </p>
                <div class="control">
                  <textarea maxlength="400" class="textarea" name="comment{$i}" placeholder="" ></textarea>
                </div>
                {$fn($printed)}
              </div>
            </div>
          </div>          
ENDHEREDOC;
            echo $textarea;
            $printed++;
        }
        echo "</div>";
    } else {
    }
}

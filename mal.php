<?php
require __DIR__ . '/vendor/autoload.php';
use Jikan\MyAnimeList\MalClient;

$jikan = new MalClient;


// $anime = $jikan->getAnime(
//     (new \Jikan\Request\Anime\AnimeRequest(21))
// );
// $pics = $jikan->getAnimePictures(
//     (new \Jikan\Request\Anime\AnimePicturesRequest(21))
// );
// $stats = $jikan->getAnimeStats(
//     (new \Jikan\Request\Anime\AnimeStatsRequest(21))
// );
$ch = curl_init();
$dom = "https://api.jikan.moe/v3/search/";
$page = "anime?q=Fate/Zero&page=1";
curl_setopt($ch, CURLOPT_URL, "https://api.jikan.moe/v3/search/anime?q=Fate/Zero&page=1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
$response = curl_exec($ch);
curl_close($ch);
$json = json_decode($response, true);
// echo $json->request_hash;
// echo "<br>";
//Get the mal id
$id = $json['results'][1]['mal_id']; 
$anime = $jikan->getAnime(
    (new \Jikan\Request\Anime\AnimeRequest(11741))
);
// echo $anime->getTitle();

// echo $json->results[3];
// var_dump($response);
// // echo "Watching: " . $stats->getWatching();
// echo "Rated 10/10: " . $stats->getScores()[10]->getVotes();
// echo "Rated 1/10: " . $stats->getScores()[1]->getVotes();
// $stats = $jikan->getAnimeStats(
//     (new \Jikan\Request\Anime\AnimeStatsRequest(21))
// );
// echo "$stats->getScores()[1]->getVotes()";
// foreach($stats as $stat) {
//     echo "<img src='" . $stat ."'>";
// }
// echo $anime->getImageUrl();
// echo $anime->getTitle();




// function GetGenre($anime, $){
//     $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, "https://api.jikan.moe/v3/genre/anime/1/1");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
// curl_setopt($ch, CURLOPT_HEADER, FALSE);

// $response = curl_exec($ch);
// curl_close($ch);

// var_dump($response);
// }

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
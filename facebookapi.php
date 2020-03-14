<?php
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
$fb = new \Facebook\Facebook([
    'app_id' => '284629415843298',
    'app_secret' => '9b0eab74a3df6e38cb21158961e29a7c',
    'default_graph_version' => 'v2.10'
]);

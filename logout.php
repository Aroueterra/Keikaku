<?php
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed
$fb = new \Facebook\Facebook([
  'app_id' => '284629415843298',
  'app_secret' => '9b0eab74a3df6e38cb21158961e29a7c',
  'default_graph_version' => 'v2.10',
  //'default_access_token' => '{access-token}', // optional
]);
LogOut();

function LogOut()
{
  if (!isset($_SESSION)) {
    session_start();
  }
  
  if (isset($_POST['logout'])) {
    if (isset($_SESSION['fb_access_token'])) {
      $from = $_POST['logout'];
      $url = 'https://www.facebook.com/logout.php?next=' . $from . '&access_token=' . $_SESSION['fb_access_token'];
      $uri = "https://www.facebook.com/logout.php?next=" . $from . "&access_token=" . $_SESSION['fb_access_token'];
      // $url = 'https://www.facebook.com/logout.php?next=' . YOUR_SITE_URL .
      //   '&access_token=' . $token;
      // session_destroy();
      // unset($_SESSION['fb_access_token']);
      echo $url;
      // header("Refresh:0");
      // header("Location: $url");
    }
    else{
      echo "no token";
    }
  } else {
    echo "no post";
    // echo $_SESSION['fb_access_token'];
  }
}

<?php
include "facebookapi.php";
if (isset($_GET['publish'])){
    try {
        $publishStream = $fb->api("/$user/feed", 'post', array(
            'message' => "Test",
            'link'    => 'http://ithinkdiff.net',
            'picture' => 'http://thinkdiff.net/ithinkdiff.png',
            'name'    => 'iOS Apps & Games',
            'description'=> 'Checkout iOS apps and games from iThinkdiff.net. I found some of them are just awesome!'
        )
    );
    //as $_GET['publish'] is set so remove it by redirecting user to the base url
    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
    }
}
// function shareOnFacebook($link)
// {
//     include "facebookapi.php";
//     $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//     $linkData = [
//         'link' => $url,
//         'message' => 'User provided message',
//     ];

//     try {

//         $response = $fb->post('/'.$pageId.'/feed', $linkData, '{'.$accessToken.'}');
//     } catch(\Facebook\Exceptions\FacebookResponseException $e) {
//         echo 'Graph returned an error: ' . $e->getMessage();
//         exit;
//     } catch(\Facebook\Exceptions\FacebookSDKException $e) {
//         echo 'Facebook SDK returned an error: ' . $e->getMessage();
//         exit;
//     }
// }
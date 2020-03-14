<?php

require_once __DIR__ . '/vendor/autoload.php'; // change path as needed
$fb = new \Facebook\Facebook([
    'app_id' => '284629415843298',
    'app_secret' => '9b0eab74a3df6e38cb21158961e29a7c',
    'default_graph_version' => 'v2.10',
    //'default_access_token' => '{access-token}', // optional
]);
if (isset($_SESSION['fb_access_token'])) {
    // echo '<button>';
    // echo "REST";
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $fbButton = <<<HEREDOC
    <button class="button logout is-normal is-facebook " name="logout" value="{$url}" type=" button"><span class="icon"><i class="fas fa-sign-out-alt"></i></span>     &nbsp&nbsp&nbsp&nbsp   Log-out</button>
HEREDOC;
    echo $fbButton;
    // echo $_SESSION['fb_access_token'];
} else {
    // echo "WEST";
    $FBUtil = new FBUtil;
    $helper = $fb->getRedirectLoginHelper();
    // $lagout = $helper->getLogoutUrl($_SESSION['fb_access_token'], "localhost/keikaku");
    $permissions = ['email','user_location, user_link']; // Optional permissions
    $loginUrl = $helper->getLoginUrl('http://localhost/keikaku/fb-callback.php', $permissions);
    // echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
    $fbButton = <<<HEREDOC
    <button class="button is-normal is-facebook"  onclick="location.href='{$FBUtil->SubmitURL($loginUrl)}'" type=" button"><span class="icon" style="pointer-events: none;"><i class="fab fa-facebook" style="pointer-events: none;"></i></span>     &nbsp&nbsp&nbsp&nbsp   Connect with Facebook</button>
HEREDOC;
    echo $fbButton;
}
class FBUtil
{
    static function SubmitURL($url)
    {
        return $url;
    }
}
//


// if(isset($_POST['get_users']))
// {
//     //  get_users();
// }
// function GetURL($URL){
//     return htmlspecialchars($URL);
// }

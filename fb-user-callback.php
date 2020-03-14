<?php
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed
session_start();
$fb = new \Facebook\Facebook([
    'app_id' => '284629415843298',
    'app_secret' => '9b0eab74a3df6e38cb21158961e29a7c',
    'default_graph_version' => 'v2.10',
    //'default_access_token' => '{access-token}', // optional
]);

$helper = $fb->getRedirectLoginHelper();

try {
    $accessToken = $helper->getAccessToken();
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (!isset($accessToken)) {
    if ($helper->getError()) {
        header('HTTP/1.0 401 Unauthorized');
        echo "Error: " . $helper->getError() . "\n";
        echo "Error Code: " . $helper->getErrorCode() . "\n";
        echo "Error Reason: " . $helper->getErrorReason() . "\n";
        echo "Error Description: " . $helper->getErrorDescription() . "\n";
    } else {
        header('HTTP/1.0 400 Bad Request');
        echo 'Bad request';
    }
    exit;
}

// Logged in
// echo '<h3>Access Token</h3>';
// var_dump($accessToken->getValue());

// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
// echo '<h3>Metadata</h3>';
// var_dump($tokenMetadata);

// Validation (these will throw FacebookSDKException's when they fail)
$tokenMetadata->validateAppId('284629415843298'); // Replace {app-id} with your app id
// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
$tokenMetadata->validateExpiration();

if (!$accessToken->isLongLived()) {
    // Exchanges a short-lived access token for a long-lived one
    try {
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
        exit;
    }

    echo '<h3>Long-lived</h3>';
    var_dump($accessToken->getValue());
}

$_SESSION['fb_access_token'] = (string) $accessToken;


if (isset($_SESSION['fb_access_token'])) {
    try {
        $response = $fb->get('/me?fields=name,id,first_name,link,picture', $_SESSION['fb_access_token']);
        $user = $response->getGraphUser();
        $id = $user['id'];
        $details['id'] = $id;
        $details['name'] = $user['name'];
        $details['fname'] = $user['first_name'];
        $url = "http://graph.facebook.com/$id/picture/?type=large";
        $details['avatar'] = $url;
        $details['link'] = $user['link'];
        if (isset($_SESSION['DETAILS'])) {
            unset($_SESSION['DETAILS']);
        }
        // id, name, fname, avatar, link
        $_SESSION['DETAILS'] = $details;
    } catch (\Facebook\Exceptions\FacebookResponseException $e) {
        // Returns Graph API errors when they occur
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    }
    // $graphNode = $response->getGraphNode();
}
header('Location: plan.php');

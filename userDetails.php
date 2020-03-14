<?php
require_once __DIR__ . '/vendor/autoload.php';
$fb = new \Facebook\Facebook([
    'app_id' => '284629415843298',
    'app_secret' => '9b0eab74a3df6e38cb21158961e29a7c',
    'default_graph_version' => 'v2.10',
]);
if (isset($_SESSION['fb_access_token'])) {
    try {
        if (isset($_SESSION['DETAILS'])) {
            $details = $_SESSION['DETAILS'];
            $info = <<<HEREDOC
            <img class="is-horizontal-center image is-64x64" src="{$details['avatar']}" style="margin: 10px 5px 5px 5px;">
HEREDOC;
            echo $info;
        }
    } catch (\Facebook\Exceptions\FacebookResponseException $e) {
        // Returns Graph API errors when they occur
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        // Returns SDK errors when validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
    // $graphNode = $response3->getGraphNode();
}

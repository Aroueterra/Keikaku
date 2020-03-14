<?php
if (isset($_POST['submitcomment'])) {
    include 'config.php';
    $mal_id = $_POST['getmal'];
    $name = addslashes($_POST['name']);
    $comment = addslashes($_POST['comment']);
    $code = $_POST['code'];
    $avatar = addslashes($_POST['avatar']);
    $row = array();
    $fb1 = "";
    $fb2 = "";
    $fb3 = "";
    $fb4 = "";
    if (isset($_SESSION['fb_access_token'])) {
        $details = $_SESSION['DETAILS'];
        $fb1 = $details['id'];
        $fb2 = addslashes($details['fname']);
        $name = $fb2;
        $avatar = $fb4;
        $fb3 = addslashes($details['link']);
        $fb4 = addslashes($details['avatar']);
        $sql = "SELECT * from users where fb_id='$fb1'";
        $mal_ids = array();
        if ($users = mysqli_query($mysqli, $sql)) {
            if (mysqli_num_rows($users) > 0) {
                $row = mysqli_fetch_array($users);
            } else {
                $sql = "INSERT INTO users (fb_id, code, name, link, avatar)
                VALUES ('$fb1', '$code', '$fb2', '$fb3', '$fb4')";
                if (mysqli_query($mysqli, $sql)) {
                    // echo "User created.";
                    var_dump($details);
                } else {
                    echo "SQL ERROR: Could not execute $sql. " . mysqli_error($mysqli);
                }
            }
        }
    }
    if ($code != "none") {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $sql = "";
        if (isset($_SESSION['fb_access_token'])) {
            $details = $_SESSION['DETAILS'];
            $fb2 = addslashes($details['fname']);
            $name = $fb2;
            $avatar = $fb4;
            $fb4 = addslashes($details['avatar']);
            $sql = "INSERT INTO comments (code, mal_id, comment, priority, name, avatar)
        VALUES ('$code', '$mal_id', '$comment', 3, '$fb2', '$fb4')";
        } else {
            $sql = "INSERT INTO comments (code, mal_id, comment, priority, name, avatar)
            VALUES ('$code', '$mal_id', '$comment', 3, '$name', '$avatar')";
        }
        if (mysqli_query($mysqli, $sql)) {
            // echo "Comment created.";
            $_SESSION['commented'] = "set";
            header("Location: plan.php");
            die();
        } else {
            echo "SQL ERROR: Could not execute $sql. " . mysqli_error($mysqli);
        }
    }
}

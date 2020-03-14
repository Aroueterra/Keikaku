<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $title = addslashes($_POST['title']);
    $description = addslashes($_POST['description']);
    $avatar = $_POST['avatar'];
    $name = addslashes($_POST['fname']);
    $plan = $_SESSION['plan'];
    $theme = $_POST['theme'];
    $review = $_POST['review'];
    $code = $_POST['code'];
    $code = preg_replace('/\s+/', '', $code);
    // var_dump($code);
    $mal_id = "";
    $mal_id = implode(",", $plan);
    $avatar = addslashes($avatar);
    include 'config.php';
    $sql = "";
    if (isset($_SESSION['fb_access_token'])) {
        $details = $_SESSION['DETAILS'];
        $fb1 = $details['id'];
        $fb2 = addslashes($details['name']);
        $fb3 = addslashes($details['link']);
        $fb4 = addslashes($details['avatar']);
        $sql = "INSERT INTO users (fb_id, code, name, link, avatar)
        VALUES ('$fb1', '$code', '$fb2', '$fb3', '$fb4')";
        if (mysqli_query($mysqli, $sql)) {
            echo "User created.";
            var_dump($details);
        } else {
            echo "SQL ERROR: Could not execute $sql. " . mysqli_error($mysqli);
        }
    }
    if ($_POST['review'] == "no") {
        $sql = "INSERT INTO plan (code, title, description, name, avatar, mal_id)
        VALUES ('$code', '$title', '$description', '$name', '$avatar', '$mal_id')";
        if (mysqli_query($mysqli, $sql)) {
            echo "Records inserted successfully.";
        } else {
            echo "SQL ERROR: Could not execute $sql. " . mysqli_error($mysqli);
        }
    } else {
        // $comments = array();
        for ($i = 1, $mal_skip = 0; $mal_skip < count($plan); $i++, $mal_skip++) {
            if (isset($_POST['comment' . $i]) && !empty($_POST['comment' . $i])) {
                $comment = addslashes($_POST['comment' . $i]);
                // array_push($comments, $comment);
                $sql = "INSERT INTO comments (code, mal_id, comment, priority, name, avatar)
                VALUES ('$code', '$plan[$mal_skip]', '$comment', 1, '$name', '$avatar')";
                if (mysqli_query($mysqli, $sql)) {
                    echo " +1 comment ";
                } else {
                    echo "SQL ERROR: Could insert comment $sql. " . mysqli_error($mysqli);
                }
            } else {
                continue;
            }
        }
        $sql = "INSERT INTO plan (code, title, description, name, avatar, mal_id)
        VALUES ('$code', '$title', '$description', '$name', '$avatar', '$mal_id')";
        if (mysqli_query($mysqli, $sql)) {
            echo "Records inserted successfully.";
        } else {
            echo "SQL ERROR: Could not execute $sql. " . mysqli_error($mysqli);
        }

        // $allcomments = addslashes(implode(",", $comments));
        // $sql = "INSERT INTO plan (code, title, description, name, avatar, mal_id, review)
        //         VALUES ('$code', '$title', '$description', '$name', '$avatar', '$mal_id', '$allcomments')";
    }
    mysqli_close($mysqli);
    $_SESSION['mycode'] = $code;
    header("Location: plan.php");
    die();
}

// if (isset($_POST['DeleteID'])) {
//     var_dump($_SESSION['plan']);
//     if (isset($_SESSION['plan'])) {
//         $arr = $_SESSION['plan'];
//         $id = $_POST['DeleteID'];
//         unset($_POST['DeleteID']);
//         $arr = array_diff($arr, array($id));
//         $_SESSION['plan'] = $arr;
//     } else {
//         echo "VERY BAD";
//     }
// } else {
//     echo "BAD";
// }

<?php
// if(isset($_POST['DeleteID']) && !empty($_POST['DeleteID'])) {
//     $action = $_POST['action'];
//     switch($action) {
//         case 'test' : ;break;
//         case 'blah' : break;
//     }
// }
session_start();
if (isset($_POST['DeleteID'])) {
    var_dump($_SESSION['plan']);
    if (isset($_SESSION['plan'])) {
        $arr = $_SESSION['plan'];
        $id = $_POST['DeleteID'];
        unset($_POST['DeleteID']);
        $arr = array_diff($arr, array($id));
        $_SESSION['plan'] = $arr;
    }else{
        echo "VERY BAD";    
    }
} else {
    echo "BAD";
}

<?php
// if(isset($_POST['DeleteID']) && !empty($_POST['DeleteID'])) {
//     $action = $_POST['action'];
//     switch($action) {
//         case 'test' : ;break;
//         case 'blah' : break;
//     }
// }
session_start();
if (isset($_POST['storeID'])) {
    echo "GOOD ";

    echo "GOODer";
    $val = $_POST['storeID'];
    echo "ID to add: " . $val;
    if (isset($_SESSION['plan'])) {
        echo "storing " . $val;
        $p = $_SESSION['plan'];
        if (!in_array($val, $p)) {
            array_push($_SESSION['plan'], $val);
        }
    } else {
        echo "creating plan for " . $val;
        $_SESSION['plan'] = array();
        array_push($_SESSION['plan'], $val);
    }

    // if (isset($_SESSION['plan'])) {
    //     $arr = $_SESSION['plan'];
    //     $id = $_POST['DeleteID'];
    //     unset($_POST['DeleteID']);
    //     $arr = array_diff($arr, array($id));
    //     $_SESSION['plan'] = $arr;
    // }else{
    //     echo "VERY BAD";    
    // }
} else {
    echo "BAD";
}

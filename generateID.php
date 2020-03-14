<?php

include "adjectives.php";
include "animals.php";
require_once 'config.php';
$adjectives = explode("\n", $adj);
$animals = explode("\n", $ani);

$code = GetID($adjectives, $animals, $mysqli);
echo $code;

function GetID($adjectives, $animals, $mysqli)
{

    $ID = "";
    $counter = -1;
    do {
        $counter++;
        $ID = Generate($adjectives, $animals, $counter);

        $sql = "SELECT code FROM plan WHERE code='$ID'";
        $result = mysqlI_query($mysqli, $sql);
        $found = true;
        if (mysqlI_num_rows($result) > 0) {
            $found = true;
        } else {
            $found = false;
        }
    } while ($found == true);
    return $ID;
}

function Generate($adjectives, $animals, $counter)
{
    $id = "";
    $arr = Randomize2(Randomize($adjectives), $adjectives);
    $firstAdj = $adjectives[$arr[0]];
    $secondAdj = $adjectives[$arr[1] + $counter];
    if (array_key_exists($arr[0], $animals)) {
        $animal = $animals[$arr[0]];
    } else {
        $animal = $animals[$arr[0] - 500];
    }

    return $id = $firstAdj . $secondAdj . $animal;
}
function Randomize($array)
{
    $rand = (rand() % 10);
    return ($rand + (rand() % count($array)) + 1) % 1400;
}
function Randomize2($rando, $array)
{

    $final = ($rando + (rand() % count($array)) + 1) % 1400;
    $arr = array();
    array_push($arr, $rando, $final);
    return $arr;
}

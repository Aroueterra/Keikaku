<?php

include_once "adjectives.php";
include_once "animals.php";
$adjectives = explode("\n", $adj);
$animals = explode("\n", $ani);
$code = GetID($adjectives, $animals);
echo $code;

function GetID($adjectives, $animals)
{
    $ID = "";
    $counter = -1;
    do {
        $counter++;
        $ID = Generate($adjectives, $animals, $counter);
        include 'config.php';
        $sql = "SELECT code FROM plan WHERE code='$ID'";
        $result = mysqlI_query($connection, $sql);
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
    $animal = $animals[$arr[0]];
    return $id = $firstAdj . $secondAdj . $animal;
}
function Randomize($array)
{
    $rand = (rand() % 10);
    return ($rand + (rand() % count($array)) + 1) % 1275;
}
function Randomize2($rando, $array)
{

    $final = ($rando + (rand() % count($array)) + 1) % 1400;
    $arr = array();
    array_push($arr, $rando, $final);
    return $arr;
}

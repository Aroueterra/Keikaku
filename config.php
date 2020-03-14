<?php


// $mysqli = new mysqli("localhost", "id12910231_root", "password", "id12910231_keikaku");
// if ($mysqli->connect_errno) {
// 	printf("Connect failed: %s\n", $mysqli->connect_error);
// 	exit();
// }
$mysqli = new mysqli("localhost", "root", "", "keikaku");
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

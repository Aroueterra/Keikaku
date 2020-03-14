<?php
// UPLOAD
if (isset($_POST['submit'])) {
	$code = $_POST['code'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$name = $_POST['name'];
	$mal_id = $_POST['mal_id'];
	$review = $_POST['review'];
	$review = preg_replace('/\s+/', '', $review);
	// foreach ($_POST as $key => $value) {
	// 	echo "<tr>";
	// 	echo "<td>";
	// 	echo $key;
	// 	echo "</td>";
	// 	echo "<td>";
	// 	echo $value;
	// 	echo "</td>";
	// 	echo "</tr>";
	// }
	include 'config.php';
	// $mysqli = new mysqli("localhost", "root", "", "keikaku");
	// if ($mysqli->connect_errno) {
	// 	printf("Connect failed: %s\n", $mysqli->connect_error);
	// 	exit();
	// }
	$sql = "INSERT INTO plan (code, title, description, name, mal_id, review)
    VALUES ('$code', '$title', '$description', '$name', '$mal_id','$review')";
	if(mysqli_query($mysqli, $sql)){
		echo "Records inserted successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
	}

	mysqli_close($mysqli);
}

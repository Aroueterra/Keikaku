<?php
	include 'config.php';

	$sql = "SELECT * FROM plan";
	$result = mysqli_query($connection, $sql);

?>

<table width="80%" align="center" border="1" cellspacing="0" cellspacing="0">
	<tr>
		<th>code</th>
		<th>title</th>
		<th>description</th>
	</tr>
	<?php
		while ($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $row['code'] . "</td>";
			echo "<td>" . $row['title'] . "</td>";
			echo "<td><a href = 'edit-user.php?id=" .($row['description']) ."'>EDIT</td>";
			echo "</tr>";
		}
	?>
</table>
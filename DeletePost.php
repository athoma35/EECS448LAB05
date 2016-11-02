<?php
$mysqli_u = new mysqli("mysql.eecs.ku.edu", "athomas", "Password123!", "athomas");
$user = $_POST["uName"];
$post = $_POST["post"];
//Czech connection
if ($mysqli->connect_errno)
{
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

?>

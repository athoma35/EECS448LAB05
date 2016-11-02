<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "athomas", "Password123!", "Users");
//Czech connection
if ($mysqli->connect_errno)
{
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

 ?>

<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "athomas", "Password123!", "athomas");
$user = $_POST["uName"];
//Czech connection
if ($mysqli->connect_errno)
{
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$query = "SELECT user_id FROM Users WHERE user_id = '".$user."'";
if ($mysqli->query($query) != FALSE)
{
	echo "User not added: User already exists.";
}
else if ($user == "")
{
	echo "User not added: no username.";
}
else
{
	$add = "INSERT INTO Users (user_id) VALUES ('".$user."')";
	if ($mysqli->query($add) == TRUE)
	{
		echo "User added.";
	}
	else
	{
		echo "Error: " . $add . "<br>" . $mysqli->error;
	}
}

$mysqli->close();
	?>

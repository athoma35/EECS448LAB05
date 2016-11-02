<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "athomas", "Password123!", "athomas");
$user = $_POST["uName"];
$post = $_POST["post"];
//Czech connection
if ($mysqli->connect_errno)
{
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$query = "SELECT user_id FROM Users WHERE user_id = '".$user."'";
if ($mysqli->query($query) != FALSE)
{
	if (strlen($post) == 0)
	{
		echo "Post not made: Empty post.";
	}
	else
	{
		$postr = "INSERT INTO Posts (content, author_id) VALUES ('".$post."', '".$user."')";
		if ($mysqli->query($postr) != FALSE)
		{
			echo "Post made.";
		}
		else
		{
			echo "Error: " . $query . "<br>" . $mysqli->error;
		}
	}
}
else
{
	echo "Post not made: Unregistered user.";
}

$mysqli->close();
	?>

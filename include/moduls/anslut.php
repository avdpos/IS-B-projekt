<?php

function connect()
{

	$username = "admin";
	$password = "admin";
	$servername = "localhost";
  $dbName = "massagetid"


	$conn = mysqli_connect($servername, $username, $password, $dbName);


	if ($conn->connect_error)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		return $conn;
	}


}


?>

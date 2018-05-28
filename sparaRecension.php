<?php



include "include/moduls/dbConnection.php";
$username = $conn->real_escape_string($_POST["username"]);
$recension = $conn->real_escape_string($_POST["recension"]);

$query_one = "INSERT INTO recension (Recension) VALUES('$recension')";
$connection->query($query_one);

$query_two = "INSERT INTO bestallare (Username) VALUES('$username')";
$connection->query($query_two);

header("Location: recension.php");


?>
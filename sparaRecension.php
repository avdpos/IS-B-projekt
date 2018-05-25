<?php


include "include/moduls/dbConnection.php";

$username = $conn->real_escape_string($_POST["username"]);
$recension = $conn->real_escape_string($_POST["recension"]);

$query = "INSERT INTO recension (Username, Recension) VALUES('$username','$recension')";
$conn->query($query);
header("Location: recension.php");


?>
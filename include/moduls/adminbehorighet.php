<?php
include "dbconnection.php";
$massorId   =   $_POST["massorId"];
echo  $massorId;
$sql        =   "INSERT INTO administratorer(MassageId) VALUE $massorId";
$conn->query($sql);

header("Location: ../../adminpanel.php");
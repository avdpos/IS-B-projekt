<?php
include     "dbconnection.php";

$massorId   =   $_POST["massorId"];

$sql        =   "UPDATE massor SET CertifikatId = 1 WHERE MassorId = $massorId";
$conn->query($sql);
header("Location: ../../adminpanel.php");
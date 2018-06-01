<?php
include     "dbconnection.php";
$massorId   =   $_POST["massorId"];

$sql        =   "UPDATE massor SET CertifikatId = 2 WHERE MassorId = $massorId";
if ($conn->query($sql) == TRUE)
{echo "success";

}
echo $massorId;
//header("Location: ../../adminpanel.php");
<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include 'dbconnection.php';
$bestallareID    =  $_SESSION['bestallareId'];
$betyg          =   $_POST["betyg"];
$recension      =   $conn->real_escape_string($_POST["recension"]);
$massorId       =   $_POST["massorId"];
echo "massor-id " . $massorId;

$query_one = "INSERT INTO recension (Recension, BestallareId, Betyg, MassorId) VALUES('$recension', '$bestallareID', '$betyg', '$massorId')" ;
echo $query_one;
if ($conn->query($query_one) == TRUE)
{
    $_SESSION['meddelande'] =   "Recensionen postad";
    header("Location: ../../oskrivna_recensioner.php");
}
else
{
    echo "Något blev fel";
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

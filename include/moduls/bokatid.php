<?php
include "dbconnection.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$tidid      =   $_SESSION["bokning"];


$sql    =   "INSERT INTO massagetid(BestallarId) VALUE '$tidid' WHERE massagetid.TidId = '$tidid'"; 

if ($conn->query($sql) === TRUE) {
    $_SESSION["message"]    =   "Bokning genomförd";

    
    mysqli_close($conn);
    header("Location: ../../bokningsbekraftelse.php");
} else {
    $_SESSION["message"]    =   "Något blev fel, försök igen";

    mysqli_close($conn);
    
    header("Location: ../../index.php");
}
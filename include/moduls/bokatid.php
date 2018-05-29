<?php
include "dbconnection.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$tidid          =   $_SESSION["bokning"];
$bestallareId    =   $_SESSION["bestallareId"];
echo "tid id: " . $tidid . "<br>";
echo "beställarId " . $bestallareId;

$sql    =   "UPDATE massagetid SET BestallarId = $bestallareId WHERE TidId = $tidid"; 

if ($conn->query($sql) === TRUE) {
    $_SESSION["message"]    =   "Bokning genomförd";

    
    mysqli_close($conn);
    header("Location: ../../bokningsbekraftelse.php");
} else {
    $_SESSION["message"]    =   "Något blev fel, försök igen";
    echo "något blev fel";
    mysqli_close($conn);
    
    /*header("Location: ../../index.php")*/;
}
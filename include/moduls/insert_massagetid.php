<?php
include "dbconnection.php";
//session bara för att testa
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$date       =mysqli_real_escape_string($conn, $_POST['date']);
$tid        =mysqli_real_escape_string($conn, $_POST['tid']);

//satt för test ska vara från $_SESSION
$massorID   = $_SESSION["massorId"];

$klassisk   =mysqli_real_escape_string($conn, $_POST['klassisk']);
$thai       =mysqli_real_escape_string($conn, $_POST['thai']);
$idrott     =mysqli_real_escape_string($conn, $_POST['idrott']);
$fot        =mysqli_real_escape_string($conn, $_POST['fot']);
$huvud      =mysqli_real_escape_string($conn, $_POST['huvud']);

//placeholder 2:a
$behandlingsId  =   '2';
/*
$sql        ="INSERT INTO mojligaBehandlingar(1, 2, 3, 4, 5)
                VALUES('$klassisk', '$thai', '$idrott', '$fot', '$huvud')
                WHERE NOT EXISTS (SELECT"*/




//placeholder på behandlingsId
$sql        ="INSERT INTO massagetid(MassorId, Datum, StartTid, BehandlingsId) VALUES ('$massorID', '$date', '$tid', '$behandlingsId')";


if ($conn->query($sql) === TRUE) {
    $_SESSION["message"]    =   "Massagetid skapad";

    
    mysqli_close($conn);
    header("Location: ../../addBokningsbartid.php");
} else {
    $_SESSION["message"]    =   "Något blev fel, försök igen, $date, $tid, $massorID, $behandlingsId";

    mysqli_close($conn);
    
    header("Location: ../../addBokningsbartid.php");
}


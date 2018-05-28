<?php
include "dbconnection.php";
//session bara för att testa


$date       =mysqli_real_escape_string($conn, $_POST['date']);
$tid        =mysqli_real_escape_string($conn, $_POST['tid']);

$massorID   = 1; //$_SESSION['massorId'];

$klassisk   =mysqli_real_escape_string($conn, $_POST['klassisk']);
$thai       =mysqli_real_escape_string($conn, $_POST['thai']);
$idrott     =mysqli_real_escape_string($conn, $_POST['idrott']);
$fot        =mysqli_real_escape_string($conn, $_POST['fot']);
$huvud      =mysqli_real_escape_string($conn, $_POST['huvud']);




/* Utkommenterad kod för att testa ny lösning

//kontrollera ifall denna kombination av behandlignar finns i databasen
$sql        ="SELECT mojligaBehandlingarId FROM mojligabehandlingar WHERE
                1 LIKE '$klassisk' AND
                2 LIKE '$thai' AND
                3 LIKE '$idrott' AND
                4 LIKE '$fot' AND
                5 LIKE '$huvud'";

$result     =$conn->query($sql);

//ifall den inte fanns, sätt in den i databasen
if (!$result)
{
    $sql        ="INSERT INTO mojligaBehandlingar(1, 2, 3, 4, 5)
                    VALUES('$klassisk', '$thai', '$idrott', '$fot', '$huvud')";

    $conn->query($sql);

    // hämta sedan mojligbehandlingsID

    $sql        ="SELECT mojligaBehandlingarId FROM mojligabehandlingar WHERE
                1 LIKE '$klassisk' AND
                2 LIKE '$thai' AND
                3 LIKE '$idrott' AND
                4 LIKE '$fot' AND
                5 LIKE '$huvud'";
    
    $result     =$conn->query($sql);
}
//byt namn på $row till något tydligt.
$mojligBehandlingsId    =   $result->fetch();

//skapa massagetid, meddelanden sparas i session för att ropa tillbaka hut det gick.
$sql        ="INSERT INTO massagetid(Datum, StartTid, MassorId, BehandlingsId)
                VALUES('$date', '$tid', '$massorId', '$mojligBehandlingsId')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['message']    =   "Massagetid skapad";
    //gå till rätt plats
    header("Location: index.php");
    mysqli_close($conn);
} else {
    $_SESSION['message']    =   "Något blev fel, försök igen";
    mysqli_close($conn);
    //
    
}

*/
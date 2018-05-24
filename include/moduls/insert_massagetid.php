<?php
include "dbconnection.php";

$date       =mysqli_real_escape_string($conn, $_POST['Datepicker']);
$tid        =mysqli_real_escape_string($conn, $_POST['Tid']);
$behandling =mysqli_real_escape_string($conn, $_POST['Behandling']);
$massorID   = $_SESSION['massorId'];

$klassisk   =mysqli_real_escape_string($conn, $_POST['klassisk']);
$thai       =mysqli_real_escape_string($conn, $_POST['thai']);
$idrott     =mysqli_real_escape_string($conn, $_POST['idrott']);
$fot        =mysqli_real_escape_string($conn, $_POST['fot']);
$huvud      =mysqli_real_escape_string($conn, $_POST['huvud']);

//kontrollera ifall denna kombination av behandlignar finns i databasen
$sql        ="SELECT mojligBehandlingsId WHERE
                1 LIKE $klassisk AND
                2 LIKE $thai AND
                3 LIKE $idrott AND
                4 LIKE $fot AND
                5 LIKE $huvud";
$result     =$conn->query($sql);
$row        =$result->fetch();

//ifall den inte fanns, sätt in den i databasen
if (!$row)
{
    $sql        ="INSERT INTO mojligaBehandlingar(1, 2, 3, 4, 5)
                    VALUES('$klassisk', '$thai', '$idrott', '$fot', '$huvud')";

    $sql        ="SELECT mojligBehandlingsId WHERE
                    1 LIKE $klassisk AND
                    2 LIKE $thai AND
                    3 LIKE $idrott AND
                    4 LIKE $fot AND
                    5 LIKE $huvud";
    $result     =$conn->query($sql);

    // hämta sedan mojligbehandlingsID

    $sql        ="SELECT mojligBehandlingsId WHERE
                1 LIKE $klassisk AND
                2 LIKE $thai AND
                3 LIKE $idrott AND
                4 LIKE $fot AND
                5 LIKE $huvud";
    $result     =$conn->query($sql);
    $row        =$result->fetch();
}
//byt namn på $row till något tydligt.

$mojligBehandlingsId    =   $row;

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


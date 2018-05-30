
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/_header.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Massagetid</title>
</head>

<?php
    include "include/moduls/dbconnection.php";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $tidid      =   $_SESSION["bokning"];
    $sql        =   "SELECT Datum, StartTid, massor.KlinikNamn FROM massagetid, massor WHERE TidId LIKE $tidid AND massagetid.MassorId = massor.MassorId";
    $result     =   $conn->query($sql);
    $bokning    =   $result->fetch_assoc();   

?>
<body>
    
    <div class="wrapper">
     <?php include "include/views/_header.php"; ?>
    <div>
        <br><br><br><br><br>
        <?php
            echo "Du har bokat en tid " . $bokning["Datum"] . " klockan " . $bokning["StartTid"] . " hos " . $bokning["KlinikNamn"];
            echo ". Bekrädtelse mejl är skickat med alla uppgifter till " . $_SESSION["email"];
        ?>
        
       <br><br><br>
    </div>
</body>
</html>
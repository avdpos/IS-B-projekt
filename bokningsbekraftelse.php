
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

    $tidid      =   $_SESSION["tidid"];
    $sql        =   "SELECT Datum, Tid, KlinkNamn FROM massagetid, massor WHERE TidId LIKE '$tidid' AND massortid.MassorId = massor.massorId";
    $result     =   $conn->query($sql);
    $bokning    =   $result->fetch_assoc();   

?>
<body>
    <div class="wrapper">
    <div>
        <?php include 'include/views/_header.php';
            echo "Du har bokat en tid " . $bokning['Datum'] . "klockan " . $bokning['Tid'] . "hos " . $bokning['KlinikNamn'];
            echo "Bekrädtelse mejl är skickat med alla uppgifter till " . $_SESSION['email'];
        ?>
        
       
    </div>
</body>
</html>
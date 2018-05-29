
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
    if (!empty($_SESSION["bestallare"]))
    {
        if($_SESSION["bestallare"] == TRUE)
        {
            $sql   =   "SELECT * FROM recension WHERE BestallareId = $_SESSION['bestallareId']";
            $resultb     =   $conn->query($sql);
            $bestallare =   true;
        }
    }
    else if (!empty($_SESSION["massor"]))
    {
        if($_SESSION["massor"] == TRUE)
        {
            $sql   =   "SELECT * FROM recension WHERE MassorId = $_SESSION['massorId']";
            $resultm    =   $conn->query($sql);
            $bestallare =   false;
        }
    }     
?>
<body>
    <div class="wrapper">
    <div>
        <?php include 'include/views/_header.php' ?>   
    </div>
    <div>
        <?php
            if ($bestallare == true)
            {

                while($row = $resultb->fetch_assoc())
				{
					
                }
            }
           
        ?>
               
    
        
    </div>
</body>
</html>
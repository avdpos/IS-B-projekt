
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
    $bestallareId   =   $_SESSION['bestallareId'];

    $sql        =   "SELECT Namn, KlinikNamn, massor.MassorId FROM massagetid, massor 
                        WHERE BestallarId =  $bestallareId AND massagetid.MassorId = massor.MassorId ";
    $result     =   $conn->query($sql);
      
?>
<body>
    <div class="wrapper">
    <div>
        <?php include 'include/views/_header.php' ?>   
    </div>
    <div>
        <?php
            while($row = $result->fetch_assoc())
				{
					echo $row["Namn"], " från ", $row["KlinikNamn"];
					

					echo	"<form method='post' action='skrivrecension.php'>
								<button type='submit'>Skriv recension</button> 
							</form>";
							
					echo 	"<br>";
                }
        ?>
               
    
        
    </div>
</body>
</html>
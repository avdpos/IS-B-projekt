
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
                        WHERE BestallarId =  $bestallareId AND massagetid.MassorId = massor.MassorId";
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
                    $massorId = $row['MassorId'];
                    echo    "<div class=\"besok\">Besök hos " . $row['Namn'] . " hos " . $row['KlinikNamn'];
                    // sparar massörId som variabel för varje enskild recension, så att man kan ha flera massörer som väntar smtidigt.
                    echo	"<form method='post' action='skrivrecension.php'>
                                <input type='hidden' value='$massorId' name='massorId'>
								<button type='submit'>Skriv recension</button> 
							</form>";
						
					echo 	"</div>";
                }
        ?>
               
    
    </div>
    </div>
</body>
</html>
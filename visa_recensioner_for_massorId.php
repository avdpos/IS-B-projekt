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

    $massorId   =   $_POST["massor"];
    

    $sql        =   "SELECT Namn, KlinikNamn, massor.MassorId, Recension, Betyg FROM massagetid, massor, recension 
                        WHERE  massagetid.MassorId = $massorId AND massor.MassorId = $massorId";
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
                    //omvandla sql:s bool-värden 1 och 2 till läsbar text
                    if ($row["Betyg"] == 1) {
                        $betyg  =   "Rekommenderas";
                    }
                    else if ($row["Betyg"] == 0){
                        $betyg  =   "Rekommenderas inte";
                    }
                    //Själva recensionen skickas ut
                    echo "<div class=\"besok\">
                    <table>
                        <tr>
                            <th><b>" .
                                $row["Namn"] . " från " . $row["KlinikNamn"] .
                            "</b></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>
                                <b>Betyg</b>
                            </th>
                            <td>" . $betyg .
                            "</td>
                        </tr>
                        <tr>
                            <th>
                                Recension
                            </th>
                            <td>" . $row["Recension"] .
                            "</td>
                        </tr>
                    </table>
                    </div>";
                        
					

                }
        ?>
               
    
        
    </div>
</body>
</html>
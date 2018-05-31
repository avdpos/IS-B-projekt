
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

    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }   
    /* Funktionerna kontrollerar ifall man är inloggad och skickar då tillbaka recensioner kopplade till personen
    REcensionerna kommer tillabaka med det senaste skrivna recensionen överst */
    if (!empty($_SESSION["bestallare"]))
    {

        if($_SESSION["bestallare"] == TRUE)
        {
            $id         =   $_SESSION["bestallareId"];
            $sql        =   "SELECT Namn, KlinikNamn, Betyg, Recension FROM recension, massor WHERE BestallareId LIKE '$id' AND massor.MassorId = recension.MassorId ORDER BY RecensionsId DESC";
            $resultb    =   $conn->query($sql);
            $bestallare =   true;
        }
    }
    else if (!empty($_SESSION["massor"]))
    {
        if($_SESSION["massor"] == TRUE)
        {
            $id         =   $_SESSION["massorId"];
            $sql        =   "SELECT * FROM recension WHERE MassorId LIKE '$id' ORDER BY RecensionsId DESC";
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
        //Recensioner som beställaren har skrivit
            if ($bestallare == true)
            {
                if (empty($row = $resultb->fetch_assoc()))
                {
                    echo    "<div class=\"besok\">
                                <h3>
                                    Du har inte skrivit några recensioner ännu.
                                </h3>
                            </div>";
                }
                while($row = $resultb->fetch_assoc())
				{
                    echo    "<div class=\"besok\">
                                <table>
                                    <tr>
                                        <th>Massör</th>
                                        <td>" . $row["Namn"] . "</td>
                                    </tr>
                                    <tr>
                                        <th>Massageklinik</th>
                                        <td>" . $row["KlinikNamn"] . "</td>
                                    </tr>
                                    <tr>
                                        <th>Mitt omdöme</th>
                                        <td>" . $row["Betyg"] . "</td>
                                    </tr>
                                    <tr>
                                        <th>Min Recension</th>
                                        <td>" . $row["Recension"] . "</td>
                                    </tr>
                                </table>
                            </div>";
                }
            }
        //Recension som blivit skrivna om dig som massör  
            if ($bestallare == false)
            {
                if (empty($row  = $resultm->fetch_assoc()))
                {
                    echo    "<div class=\"besok\">
                                <h3>
                                    Ingen har recenserat dig ännu.
                                </h3>
                            </div>";
                }
                while($row = $resultm->fetch_assoc())
				{
                    echo    "<div class=\"besok\">
                                <table>
                                    <tr>
                                        <th>Omdöme</th>
                                        <td>" . $row["Betyg"] . "</td>
                                    </tr>
                                    <tr>
                                        <th>Recension</th>
                                        <td>" . $row["Recension"] . "</td>
                                    </tr>
                                </table>
                            </div>";
                }
            }
        ?>
               
    
        
    </div>
</body>
</html>
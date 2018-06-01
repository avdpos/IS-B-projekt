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
?>
<body>
    
    <div class="wrapper">
     <?php include "include/views/_header.php"; ?>
    <div>
        <br><br><br><br><br>
        <h2>Redigera behörighet<h2>
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        if (!empty($_SESSION['admin']))
        {
            $sql        =   "SELECT Namn, KlinikNamn, MassorId, CertifikatId FROM  massor";
            $result     =   $conn->query($sql);
        
                while($row = $result->fetch_assoc())
                    {
                        echo    "<div class=\"besok\">" . $row['Namn'] . " från " . $row['KlinikNamn'] . "<br>";
                        $massorId   =   $row['MassorId'];
                        
                        if  (!empty($row['CertifikatId']))
                        {   
                            if($row['CertifikatId'] == 1)
                                {
                                    echo "<br> Är certifierad av Svensk massage.";
                                }
                            else
                            {
                                echo "<br> Är inte certifierad.";
                            }
                        }
                        else
                        {
                            echo "<br> Är inte certifierad.";
                        }

                        echo "
                        <form method='post' action='include/moduls/ta_bort_certifiering.php'>
                            <input type='hidden' value='$massorId' name='massorId'>
                            <button type='submit'>Dra tillbaka certifiering</button>
                        </form>
                        <form method='post' action='include/moduls/certifierad.php'>
                            <input type='hidden' value='$massorId' name='massorId'>
                            <button type='submit'>Bekräfta certifiering</button>
                        </form>
                        <form method='post' action='include/moduls/adminbehorighet.php'>
                            <input type='hidden' value='$massorId' name='massorId'>
                            <button type='submit'>Ge adminbehörighet</button>
                        </form>
                        </div>";
                        
                        
                        /*
                        if (!empty($row['CertifikatId']))
                        {
                            
                            if ($row['CertifikatId'] == 1)
                            {
                                echo    "är certifierad av Svensk massage";
                                echo    "<form method='post' action=\"include/moduls/ta_bort_certifiering.php\">
                                            <input type='text' value='$massorId' name='massorId'>  
                                            <button type='submit'>Dra tillbaka certifiering</button>
                                        </form>";
                                echo     "<form method='post' action=\"include/moduls/adminbehorighet.php\">
                                                <input type='text' value='$massorId' name='massorId'>  
                                                <button type='submit'>Ge Adminbehörighet</button>
                                        </form>
                                        <br>MassörId = " . $massorId .
                                        "</div>";
                            }

                            echo    "är inte certifierad av Svensk massage";
                            echo    "<form  method='post' action=\"include/moduls/certifierad.php\"
                                        <input type='text' value='$massorId' name='massorId'>  
                                        <button type='submit'>Validera certifiering</button>
                                    </form>";
                            echo     "<form  method='post' action=\"include/moduls/adminbehorighet.php\">
                                            <input type='hidden' value='$massorId' name='massorId'> 
                                            <button type='submit'>Ge Adminbehörighet</button>
                                    </form><br>MassörId = " . $massorId .
                                    "
                                    </div>";
                        }
                        else
                        {                                         
                            echo    "är inte certifierad av Svensk massage";
                            echo    "<form  method='post' action=\"include/moduls/certifierad.php\"
                                        <input type='text' value='$massorId' name='massorId'>  
                                        <button type='submit'>Validera certifiering</button>
                                    </form>";
                            echo     "<form  method='post' action=\"include/moduls/adminbehorighet.php\">
                                            <input type='hidden' value='$massorId' name='massorId'> 
                                            <button type='submit'>Ge Adminbehörighet</button>
                                    </form><br>MassörId = " . $massorId .
                                    "
                                    </div>";
                            
                        }*/


                    }
        }
        
       ?>
    </div>
</body>
</html>
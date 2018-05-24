<!DOCTYPE html>

<html>
<body>
    <div class="title">
        <h1> Massagetid </h1>
        
    </div>
    <link rel="stylesheet" type="text/css" href="../../assets/css/_header.css"> 
    <ul id="meny">
        <li><a href="index.php">Home</a></li>
        <li><a href="loggainmassage.html">Logga in beställare</a></li>
        <li><a href="loggainmassor.hmtl">Logga in massör</a></li>
        <li><a href="massorreg.php">REgistrera massör</a></li>
        <li><a href="validateBestallarReg.php">reg bestallare</a></li>
        <li><a href="addBokningsbarTid.php">Lägg till bokningsbar tid</a></li>

        
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (empty($_SESSION["loginstatus"]))
        {
           echo  "<li><a href='loggin.php'>Log in</a></li>";
           
        }
        else if (!empty($_SESSION["loginstatus"]))
        {
            if ($_SESSION["loginstatus"] == TRUE)
            {
                echo "<li><a href='logout.php'>Log out</a></li>";
                
            }
            else
            {
                echo  "<li><a href='loggin.php'>Log in</a></li>";
                
            }
        }
        ?>
        <li><a href="registration.php">Registrate new account</a></li>

    </ul>
</body>
</html>
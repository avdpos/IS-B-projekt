<!DOCTYPE html>

<html>
<body>
    <div class="title">
        <h1> Massagetid </h1>

    </div>
    <link rel="stylesheet" type="text/css" href="../../assets/css/_header.css">
    <?php if (session_status() == PHP_SESSION_NONE) {
            session_start();
        } ?>

    <ul id="meny">
        <li><a href="index.php">Sök efter ledig massagetid</a></li>
        <?php if (empty($_SESSION["loginstatus"]))
        {
            echo "<li><a href='loggainmassor.php'>Logga in massör</a></li>";
            echo "<li><a href='loggainbestallare.php'>Logga in beställare</a></li>";
            echo "<li><a href='massorreg.php'>Registrera massör</a></li>";
            echo "<li><a href='bestallreg.php'>Registrera beställare</a></li>";
        }
        if (!empty($_SESSION["massor"])){
            if ($_SESSION["massor"] == TRUE) {
                echo    "<li><a href='addbokningsbarTid.php'>Lägg till bokningsbara tider</a></li>";
            }
        }
        if (!empty($_SESSION["bestallare"]))
        {
            if ($_SESSION["bestallare"] == TRUE) 
            {
                echo "<li><a href='oskrivna_recensioner.php'>Skriv recensioner</a></li>";
            }
        }

        if (!empty($_SESSION["loginstatus"])) 
        {
            if ($_SESSION["loginstatus"] == TRUE)
            {
                echo "<li><a href='visaminarecensioner.php'>Mina recensioner</a></li>
                <li><a href='logga_ut.php'>Logga ut</a></li>";
            } 
        }
        
        ?>
    </ul>
</body>
</html>

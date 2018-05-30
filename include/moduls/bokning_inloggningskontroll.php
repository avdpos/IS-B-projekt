<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!empty($_SESSION["loginstatus"]))
    {
        if($_SESSION["loginstatus"] == TRUE) {
            $_SESSION['bokning']    =   $_POST["tid"];
            header("Location: bokatid.php");
            
        }
        else 
        {
            header("Location: ../../loggainbestallare.php");
            echo "ej inloggas";
        }
    }
else {
    header("Location: ../../loggainbestallare.php");
    echo "ej inloggas";
}
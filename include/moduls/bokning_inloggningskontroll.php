<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!empty($_SESSION["loginstatus"]))
    {
        if($_SESSION["loginstatus"] == TRUE) {
            header("Location: bokatid.php");
            echo "borde gått vidare";
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
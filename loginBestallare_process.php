<?php
include 'include/moduls/dbconnection.php';

$username   = trim(mysqli_real_escape_string($conn, $_POST['UserName']));
$password   = mysqli_real_escape_string($conn, $_POST['Password']);

//hämta salt

// $username och $password har rätt "värde".
// SQL:n ger inget vettigt resultat här. Fungerar i phpMyAdmin.
/*$sqlgetSalt = "SELECT Salt FROM userdata
                    WHERE UserName LIKE ('$username')";
$salt1     = $conn->query($sqlgetSalt);*/
//Detta gör att det fungerar, men jag vet inte riktigt varför.
/*$salt2 = $salt1->fetch_assoc();
$salt = $salt2["Salt"];*/


//hämta lösenord
$sqlgetPassword ="SELECT Password, Email, BestallarId FROM bestallare
                    WHERE Namn LIKE ('$username')";
$dbP = $conn->query($sqlgetPassword);
//Detta gör att det fungerar, men jag vet inte riktigt varför.
$Pass = $dbP->fetch_assoc();
$dbPassword = $Pass["Password"];
$dbEmail    = $Pass["Email"];
$bestallarId    =   $Pass["BestallarId"];


//gör om lösenord till det krypterade lösenordet

/*$password=md5($salt . $password . $salt);*/

//jämför lösenorden så att de är samma
if ($dbPassword == $password)
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION["username"]       =   $username;
    $_SESSION["email"]          =   $dbEmail;
    $_SESSION["loginstatus"]    =   TRUE;
    $_SESSION["bestallare"]     =   TRUE;
    $_SESSION["bestallarId"]    =   $bestallarId;

    header("Location: index.php");
}
else {
    header("Location: loggin.php");
}
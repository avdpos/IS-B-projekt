<?php
include 'include/moduls/dbconnection.php';

$username   = trim(mysqli_real_escape_string($conn, $_POST['UserName']));
$password   = mysqli_real_escape_string($conn, $_POST['Password']);

//hämta salt

// $username och $password har rätt "värde".
// SQL:n ger inget vettigt resultat här. Fungerar i phpMyAdmin.
/*$sqlgetSalt = "SELECT Salt FROM userdata
                    WHERE UserName LIKE ('$username')";
$salt1     = $conn->query($sqlgetSalt);
//Detta gör att det fungerar, men jag vet inte riktigt varför.
$salt2 = $salt1->fetch_assoc();
$salt = $salt2["Salt"];*/


//hämta lösenord
$sql ="SELECT Password, Email, MassorId FROM massor WHERE Namn LIKE '$username'";
$result = $conn->query($sql);

$Pass = $result->fetch_assoc();

$dbPassword = $Pass["Password"];
$dbEmail    = $Pass["Email"];
$massorId   = $Pass["MassorId"];

echo $Pass['Password'];

//jämför lösenorden så att de är samma
if ($dbPassword == $password)
{   

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION["username"]       =   $username;
    $_SESSION["email"]          =   $dbEmail;
    $_SESSION["loginstatus"]    =   TRUE;
    $_SESSION["bestallare"]     =   FALSE;
    $_SESSION["massor"]         =   TRUE;
    $_SESSION["massorId"]       =   $$massorId;

    header("Location: index.php");
}
else {
    $_SESSION["message"]        =$dbPassword;
    header("Location: loginMassor_Process.php");
}
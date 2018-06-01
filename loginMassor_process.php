<?php
include 'include/moduls/dbconnection.php';

$username   = trim(mysqli_real_escape_string($conn, $_POST['UserName']));
$password   = mysqli_real_escape_string($conn, $_POST['Password']);




//hämta lösenord
$sql ="SELECT Password, Email, MassorId FROM massor WHERE Namn LIKE '$username'";
$result = $conn->query($sql);

$Pass = $result->fetch_assoc();

$dbPassword = $Pass["Password"];
$dbEmail    = $Pass["Email"];
$massorId   = $Pass["MassorId"];


//jämför lösenorden så att de är samma
if ($dbPassword == $password)
{   

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION["username"]       =   $username;
    $_SESSION["email"]          =   $dbEmail;
    $_SESSION["loginstatus"]    =   TRUE;
    $_SESSION["massor"]         =   TRUE;
    $_SESSION["massorId"]       =   $massorId;

    //kontrollera adminstatus
    $sql    =   "SELECT MassorId FROM administratorer WHERE MassorId = $massorId";
    $result =   $conn->query($sql);
    $row    =   $result->fetch_assoc();
    if(!empty($row['MassorId']))
        {
            $_SESSION["admin"]  =   TRUE;
        }

    header("Location: index.php");
}
else {
    $_SESSION["message"]        =$dbPassword;
    header("Location: loginMassor_Process.php");
}
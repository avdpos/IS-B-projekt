<?php

//Modell för att plocka upp 
$errors =   null;
$errors =   array();
/*
if (preg_match("/\S+/", $_POST['Namn']) === 0)
{
    $errors["username"] = "Post a  name";
}
if (preg_match("/\S+/", $_POST['Kliniknamn']) === 0)
{
    $errors["kliniknamn"] = "Post a name";
}
if (preg_match("/(\S+\@+\S+\.+\S+)/", $_POST['Email'] === 0))
{
    $errors["email"] = "Enter a correct email";
}
if ($_POST['regPassword'] != $_POST['regPassword2'])
{
    $errors["password"] = "Passwords does not match";
}
if (strlen($_POST['regPassword']) < 7)
{
    $errors["passwordLenght"] = "Password is to short";
}
*/
// den här funktionen går inte in Vad stämmer inte?
if (sizeof($errors) == 0)
{   
    //Av någon anledning så vägrar "include/
        /*funktioner för att registrera en ny användare*/
        include 'include/moduls/dbconnection.php';

        /*ta datan*/
        $userName   =mysqli_real_escape_string($conn, $_POST['Namn']);
        $email      =mysqli_real_escape_string($conn, $_POST['Email']);
        $password   =mysqli_real_escape_string($conn, $_POST['regPassword']);
        $kliniknamn =mysqli_real_escape_String($conn, $_POST['Klinik']);

        $userName   =trim($userName, " ");
        $kliniknamn =trim($kliniknamn, " ");
        $email      =trim($email, " ");
       

        //insert i sql
        
        $sql        ="INSERT INTO massor(Namn, KlinikNamn, Email, Password)
                        VALUES('$userName', '$kliniknamn', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "New user created successfully";
            
            //
            mysqli_close($conn);
            header("Location: index.php");

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            mysqli_close($conn);
        }


    //include 'include/views/register.php';
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/_header.css">
    <title>Delat labb 2</title>
</head>

<body>
    <div>
        <?php include 'include/views/_header.php' ?>
        
        </div type="regForm">
            <form method="post" onsubmit="return validateRegistration()" action="validateMassorReg.php">
                <table class="form">
                    <tr>
                        <th><label for="Username">Username</label></th>
                        <td>
                            <input type="text" name="Namn" id="Namn" required>
                            <?php if (!empty($errors["Namn"]))
                                    {
                                        echo $errors["Namn"];
                                    }   
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Username">Kliniknamn</label></th>
                        <td>
                            <input type="text" name="Kliniknamn" id="Kliniknamn" required>
                            <?php if (!empty($errors["kliniknamn"]))
                                    {
                                        echo $errors["kliniknamn"];
                                    }   
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Email">Email</label></th>
                        <td>
                            <input type="text" name="Email" id="Email"  required>
                            <?php if (!empty($errors["email"]))
                                    {
                                        echo $errors["email"];
                                    }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Password">Password</label></th>
                        <td>
                            <input type="password" name="regPassword" id="regPassword" required>
                            <?php if (!empty($errors["passwordLenght"]))
                                    {
                                        echo $errors["passwordLenght"];
                                    }
                            ?>
                        </td>
                    <tr >
                        <th><label for="Password_Confirmation">Confirm Password</label></th>
                        <td>
                            <input type="password" name="regPassword2" id="regPassword2" required><br>
                            <?php if (!empty($errors["password"]))
                                    {
                                        echo $errors["password"];
                                    }
                            ?>
                        </td>
                    </tr>
                </table>
                <input type="submit" class="button" name="Submit" value="registrate user">
            </form>
        <div>
        <?php include 'include/views/_footer.php'?> 
    </div>
          
</body>

</html>

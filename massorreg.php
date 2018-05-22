<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/_header.css">
    <title>Massagetid</title>
</head>

<body>
    <div>
        <?php include 'include/views/_header.php' ?>
        </div type="regForm">
            <form method="post" onsubmit="return validateRegistration()" action="validateBestallarReg.php">
                <table class="form">
                    <tr>
                        <th><label for="Username">Username</label></th>
                        <td>
                            <input type="text" name="Username" id="Username" required>
                            
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Kliniknamn">Kliniknamn</label></th>
                        <td>
                            <input type="text" name="Kliniknamn" id="Kliniknamn" required>
                            
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Email">Email</label></th>
                        <td>
                            <input type="text" name="Email" id="Email"  required>
                            
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Password">Password</label></th>
                        <td>
                            <input type="password" name="regPassword" id="regPassword" required>
                        </td>
                    <tr >
                        <th><label for="Password_Confirmation">Confirm Password</label></th>
                        <td>
                            <input type="password" name="regPassword2" id="regPassword2" required><br>
                           
                        </td>
                    </tr>
                </table>
                <input type="submit" class="button" name="Submit" value="registrate user">
            </form>
        <div>
        <?php include 'include/views/_footer.php'?> 
    </div>
    <script src="assets/js/bestallarRegistration.js"></script>        
</body>

</html>
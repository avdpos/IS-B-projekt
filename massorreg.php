<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/_header.css">
    <title>Massagetid</title>
</head>

<body>
  <br>
    <div>
        <?php include 'include/views/_header.php' ?>
        </div type="regForm">
        <br>
        	 <h3>Här registreras massörer</h3>
            <form method="post" onsubmit="return validateRegistration()" action="validateMassorReg.php">
                <table class="form">
                    <tr>
                        <th><label for="Namn">Namn</label></th>
                        <td>
                            <input type="text" name="Namn" id="Namn" required>

                        </td>
                    </tr>
                    <tr>
                        <th><label for="Klinik">Klinik</label></th>
                        <td>
                            <input type="text" name="Klinik" id="Klinik" required>

                        </td>
                    </tr>
                    <tr>
                        <th><label for="Email">Email</label></th>
                        <td>
                            <input type="text" name="Email" id="Email"  required>

                        </td>
                    </tr>
                    <tr>
                        <th><label for="Password">Lösenord</label></th>
                        <td>
                            <input type="password" name="regPassword1" id="regPassword1" required>
                        </td>
                    <tr >
                        <th><label for="Password2">Bekräfta lösenord</label></th>
                        <td>
                            <input type="password" name="regPassword2" id="regPassword2" required><br>

                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" class="button" name="Submit" value="Registrera användare">
            </form>
        <div>
    </div>
    <script src="assets/js/bestallarRegistration.js"></script>
</body>

</html>

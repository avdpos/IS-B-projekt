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
	  <h3>Här registrerar beställare ny profil</h3>
    <div>
        <?php include 'include/views/_header.php' ?>
        </div type="regForm">
          <br>
            <form method="post" onsubmit="return validateRegistration()" action="validateBestallarReg.php">
                <table class="form">
                    <tr>
                        <th><label for="Namn">Namn</label></th>
                        <td>
                            <input type="text" name="Namn" id="namn" required>

                        </td>
                    </tr>
                    <tr>
                        <th><label for="personnummer">Personnummer</label></th>
                        <td>
                            <input type="text" name="personnummer" id="personnummer" required>

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

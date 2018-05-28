
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/_header.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Massagetid</title>
</head>

<body>
    <div class="wrapper">
      <div>
        <?php include 'include/views/_header.php' ?>
        </div type="regForm">
<<<<<<< HEAD
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
                            <input type="password" name="regPassword" id="regPassword" required>
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
=======
        
        <h3>Här registreras massörer</h3>
                <form method="post" onsubmit="return validateRegistration()" action="validateMassorReg.php">
        <div class="login-page">
               <div class="form">
                <form class="register-form"></form>
                <form class="login-form">
                    <input type="text" placeholder="Namn" name="Namn" id="Namn" required>
                    <input type="password" placeholder="Klinik" name="klinik" id="klinik" required>
                    <input type="password" placeholder="Email" name="email" id="email" required>
                    <input type="password" placeholder="Lösenord" name="regPassword2" id="regpassword1" required>
                    <input type="password" placeholder="Bekräfta lösenord" name="regPassword2" id="regpassword1" required>
                    <button>Skapa konto</button>
                    <p class="message">Har du redan ett konto? <a href="loggainmassor.php">Logga in här!</a></p>
                    <!--  <input type="submit" class="button" name="Submit" value="Registrera användare">-->
              </form>
             </div>
           </div>
>>>>>>> d2d28b22e06b4202775a0dbedf58727023660671
    <script src="assets/js/bestallarRegistration.js"></script>
</body>
</html>


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
        
        <h3>Här registreras massörer</h3>
                <form method="post" >
        <div class="login-page">
               <div class="form">
                <form class="login-form" onsubmit="return validateRegistration()" action="validateMassorReg.php">
                    <input type="text" placeholder="Namn" name="Namn" id="Namn" required>
                    <input type="text" placeholder="Klinik" name="klinik" id="klinik" required>
                    <input type="txt" placeholder="Email" name="email" id="email" required>
                    <input type="password" placeholder="Lösenord" name="regPassword2" id="regpassword1" required>
                    <input type="password" placeholder="Bekräfta lösenord" name="regPassword2" id="regpassword1" required>
                    <input id="knapp" type="submit" value="Skapa konto" name="submit" id="submitButton" class="button">

                    <p class="message">Har du redan ett konto? <a href="loggainmassor.php">Logga in här!</a></p>
                    <!--  <input type="submit" class="button" name="Submit" value="Registrera användare">-->
              </form>
             </div>
           </div>
    <script src="assets/js/bestallarRegistration.js"></script>
</body>
</html>

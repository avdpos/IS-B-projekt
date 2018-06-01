
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
        
        <h1>Registrera ny massör</h1>
                
        <div class="login-page">
               <div class="form">
                <form method="post" action="validateMassorReg.php">
                    <input type="text"      placeholder="Namn"              name="Namn"         id="Namn" required>
                    <input type="text"      placeholder="Klinik"            name="Klinik"       id="klinik" required>
                    <input type="text"      placeholder="Email"             name="Email"        id="email" required>
                    <input type="password"  placeholder="Lösenord"          name="regPassword"  id="regpassword" required>
                    <input type="password"  placeholder="Bekräfta lösenord" name="regPassword2" id="regpassword1" required>
                    <!--<input id="knapp" type="submit" value="Skapa konto" name="submit" class="button">-->
                    <p class="message"><input type="checkbox"  required>Jag godkänner<a href="anvandarvillkor_massor.php"> användarvilkoren.</a></p>
                    <input type="submit" class="button" name="Submit" value="Registrera användare">
                </form>
                <p class="message">Har du redan ett konto? <a href="loggainmassor.php">Logga in här!</a></p>
            </div>
        </div>
    
</body>
</html>

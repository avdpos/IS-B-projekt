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
      </div>
 
         <h1>Registrera ny kund</h1>
  
           <div class="login-page">
             <div class="form">
               <form class="register-form"></form>
               <form class="login-form">
                <input type="text" placeholder="Namn">
                <input type="password" placeholder="Epost">
                <input type="password" placeholder="Lösenord">
                <input type="password" placeholder="Bekräfta lösenord">
                 <button>Skapa konto</button>
                 <p class="message">Har du redan ett konto? <a href="loggainbestallare.php">Logga in här!</a></p>
               </form>
             </div>
           </div>
    <script src="assets/js/bestallarRegistration.js"></script>
</body>
</html>

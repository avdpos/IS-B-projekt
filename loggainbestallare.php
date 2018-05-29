<html>
	<head>	
		<meta charset="UTF-8">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/_header.css">
   		<link rel="stylesheet" href="assets/css/style.css">
  	</head>
	<body>
   	<div class="wrapper">
	<div>
		<?php include 'include/views/_header.php' ?>
	</div>
		
      <h1>Logga in Kund</h1>
		
	<div class="login-page">
	      <form >
        <div class="form">
          <form class="register-form">
          </form>
	      
          <form class="login-form" method="post" onsubmit="return validateLogin()" action="loginBestallare_process.php">
						<input type="text" name="UserName" id="UserName"
						placeholder="Skriv användarnamn" require><br>
		  
						<input type="password" name="Password" id="Password"
						placeholder="Skriv lösenord" require><br>	

						<
            <input id="knapp" type="submit" value="Logga in" name="submit" id="submitButton" class="button">
            <p class="message">Har du inget konto? <a href="bestallreg.php">Skapa profil</a></p>
           </form>
         </div>
       </div>
     </div>
   </body>
</html>

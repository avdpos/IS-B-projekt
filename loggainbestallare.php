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
		
      <h3>Här loggar beställare in</h3>
		
	<div class="login-page">
	      <form method="post" onsubmit="return validateLogin()" action="loginBestallare_process.php">
        <div class="form">
          <form class="register-form">
          </form>
	      
          <form class="login-form">
          <input type="text" name="UserName" id="UserName"
          placeholder="Skriv användarnamn" require><br>
		  
	   <input type="password" name="Password" id="Password"
	   placeholder="Skriv lösenord" require><br>	

            <button>Logga in</button>
            <p class="message">Har du inget konto? <a href="registrerabestallare.php">Skapa profil</a></p>
           </form>
         </div>
       </div>
     </div>
   </body>
</html>

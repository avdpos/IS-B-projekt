
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
      <h3>Här loggar massörer in</h3>
      <div class="login-page">
        <div class="form">
         <form class="register-form">
	</form>
          <form class="login-form">
		<input type="email" id="mail" name="mail" placeholder="E-mail">
            	<input type="password" id="password" name="password" placeholder="Lösenord">   
		<!--<input id="knapp" type="submit" value="Logga in" name="submit" id="submitButton" class="button">-->
		  
            <button>Logga in</button>
            <p class="message">Har du inget konto? <a href="registreramassor.php">Skapa profil</a></p>
          </form>
        </div>
      </div>
    </div>
</body>
</html>

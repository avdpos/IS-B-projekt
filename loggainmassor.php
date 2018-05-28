
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
<<<<<<< HEAD
		</body>

<br>
    <h3>Här loggar massörer in</h3>
		<div id="formular">
			<form method="post" onsubmit="return validateLogin()" action="loginMassor_process.php">
                Username:<br>
                <input type="text" name="UserName" id="UserName"
                placeholder="Write username here" require><br>
                Password:<br>
                <input type="password" name="Password" id="Password"
                placehinputolder="Write password here" require><br>

                
                <input type="submit" class="button" name="Submit" value="login"  >
            </form>
		
		</div>
		<?php start_session();
		echo $_SESSION['message']; ?>

	</body>
=======
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
>>>>>>> d2d28b22e06b4202775a0dbedf58727023660671
</html>

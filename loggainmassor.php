
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
		</body>

<br>
    <h3>Här loggar massörer in</h3>
    <div class="login-page">
        <div class="form">
         <form class="register-form">
         </form>
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
      </div>
		</div>
		<?php if (session_status() == PHP_SESSION_NONE) {
            session_start();
		echo $_SESSION['message']; ?>

	</body>
</html>

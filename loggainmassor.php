<?php


 ?>
<html>
	<head>
		<meta charset="utf-8">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/_header.css">


	</head>

<body>
  <br>

			<div>
					<?php include 'include/views/_header.php' ?>
			</div>
		</body>

<br>
    <h3>Här loggar massörer in</h3>
		<div id="formular">
			<form method="post" onsubmit="return validateLogin()" action="loginBestallare_process.php">
                Username:<br>
                <input type="text" name="UserName" id="UserName"
                placeholder="Write username here" require><br>
                Password:<br>
                <input type="password" name="Password" id="Password"
                placehinputolder="Write password here" require><br>
                
                <input type="submit" class="button" name="Submit" value="login"  >
            </form>
		
		</div>

	</body>
</html>

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
	  <h3>Här loggar beställare in</h3>
		<div id="formular">
				<label class="rubrik" for="mail">E-mail</label>
				<input type="email" id="mail" name="mail" placeholder="E-mail">

				<label class="rubrik" for="password">Lösenord</label>
				<input type="password" id="password" name="password" placeholder="Lösenord">

				<input id="knapp" type="submit" value="Logga in" name="submit" id="submitButton" class="button">
			</form>
		</div>

	</body>
</html>

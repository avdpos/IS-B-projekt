<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/_header.css">
    <title>Massagetid</title>
</head>

	<body>


		<div>
			<?php include 'include/views/_header.php' ?>
		</div>

		<h1> INdex-sidan</h1>
		<?php 
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		echo $_SESSION["loginstatus"];?>
	</body>



</html>


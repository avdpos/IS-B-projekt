<!DOCTYPE html>

<?php

include 'include/moduls/dbconnection.php';
$massorId = $_POST["massorId"];
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>MassageTid</title>
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/_header.css">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<?php include 'include/views/_header.php' ?>
			<h1>Skriv en recension!</h1>
				
				<div id="recensionsFormulär">
					<h4> Skriv en recension av ditt besök nedan:</h4> 
					
					<form action="include/moduls/sparaRecension.php" method="POST" name="recensionFormulär">
						<!--input massorId för behandling, för vidare det för att koppla recensionen korrekt -->
						<input type="hidden" value="<?php  echo $massorId; ?>" name="massorId">

						<label for="rekommenderas">Rekommenderas</label>
						<input type="radio" id ="rekommenderas" name="betyg" value="1">
						<label for="rekommenderas inte">Rekommenderas inte</label>									 
						<input type="radio" id ="rekommenderas inte" name="betyg" value="0">
						<br/><br/>							   
						<textarea id="recension" name="recension" placeholder="Skriv din recension här..."></textarea>
						<br/>
						<input type="submit" value="Skicka recension" id="submit">
					</form>
					
				</div>
		</div>
	</body>										
</html>

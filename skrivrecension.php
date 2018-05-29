<!DOCTYPE html>

<?php

include 'include/moduls/dbconnection.php';
$query = "SELECT Username, Recension FROM bestallare,recension WHERE bestallare.BestallareID=recension.BestallareID";
$result = $conn->query($query);

?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>MassageTid</title>
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/_header.css">
	</head>
	<body>
		<div><?php include 'include/views/_header.php' ?></div>
		<h1>Skriv en recension!</h1>
			
			<div id="recensionsFormulär">
				<h4> Skriv en recension av ditt besök nedan:</h4>
				<form action="include/moduls/sparaRecension.php" method="POST" name="recensionFormulär">		
					<label>Användarnamn:</label><br/>
					<input type="text" id="username" name="username" required>
					<br/><br/>
					<label for="rekommenderas">Rekommenderas</label>
					<input type="radio" id ="rekommenderas" name="betyg" value "Rekommenderas">
					<label for="rekommenderas inte">Rekommenderas inte</label>									 
					<input type="radio" id ="rekommenderas inte" name="betyg" value "Rekommenderas inte">
					<br/><br/>							   
					<textarea id="recension" name="recension" placeholder="Skriv din recension här..."></textarea>
					<br/>
					<input type="submit" value="Skicka" id="submit">
				</form>
				
			</div>
		
	</body>										
</html>

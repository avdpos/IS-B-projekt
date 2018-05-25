<!DOCTYPE html>

<?php

include "include/moduls/dbConnection.php";
$query = "SELECT Username, Recension FROM bestallare,recension WHERE bestallare.BestallareID=recension.BestallareID";
$result = $connection->query($query);

?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>MassageTid</title>
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/_header.css">
	</head>
	<body>

			<?php include 'include/views/_header.php' ?>
			<div id="recensioner">
				<h4>Recensioner:</h4>
				<?php
					while($row = $result->fetch_assoc())
					{
						echo $row["Username"], "<b>: </b>", $row["Recension"];
						echo "<br/>";
					}
				?>
			</div>
			<div id="recensionsFormul�r">
				<h4> Skriv en recension av ditt bes�k nedan:</h4>
				<form action="sparaRecension.php" method="POST" name="recensionFormul�r">		
					<label>Anv�ndarnamn:</label><br/>
					<input type="text" id="username" name="username" required>
					<br/>
					<textarea id="recension" name="recension" placeholder="Skriv din recension h�r..."></textarea>
					<br/>
					<input type="submit" value="Skicka" id="submit">
				</form>
				
			</div>
		
	</body>										
</html>
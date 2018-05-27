<!DOCTYPE html>

<?php



include "include/moduls/dbConnection.php";
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

			<?php include 'include/views/_header.php' ?>
			<div id="recensioner">
				<h4>Recensioner:</h4>
				<?php
					while($row = $result->fetch_assoc())
					{
						echo $row["Username"], ": ",$row["Recension"];
						echo "<br/>";
					}
				?>
			</div>
			<div id="recensionsFormulär">
				<h4> Skriv en recension av ditt besök nedan:</h4>
				<form action="sparaRecension.php" method="POST" name="recensionFormulär">		
					<label>Användarnamn:</label><br/>
					<input type="text" id="username" name="username" required>
					<br/><br/>
					<textarea id="recension" name="recension" placeholder="Skriv din recension här..."></textarea>
					<br/>
					<input type="submit" value="Skicka" id="submit">
				</form>
				
			</div>
		
	</body>										
</html>

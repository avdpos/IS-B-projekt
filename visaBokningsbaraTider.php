<!DOCTYPE html>

<?php
	include 'include/moduls/dbConnection.php';
	$datum		=	mysqli_real_escape_string($conn, $_POST['date']);

	$query = "SELECT Datum, StartTid, KlinikNamn, TidId, massor.MassorId FROM massagetid, massor WHERE massagetid.MassorId=massor.MassorId AND BestallarId IS NULL AND '$datum' = massagetid.Datum";
	$result = $conn->query($query);
?>

<html>

	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/_header.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<title>Massagetid</title>
	</head>
	<body>
		<div class = "wrapper">
		<div>
			<?php include 'include/views/_header.php'?>
		</div>

		<h1><b>Tillgängliga tider:</b><h1>
		<?php
			if (session_status() == PHP_SESSION_NONE) {
				session_start();
			}
			
			while($row = $result->fetch_assoc())
			{
				echo "<div class=\"bokningsbartid\">", $row["KlinikNamn"], "<br> ", $row["Datum"], " ", $row["StartTid"];
				$_SESSION["bokning"]	=	$row["TidId"];
				$_SESSION["bokning_massor"]	=	$row["MassorId"];

				echo	"<form method='post' action='include/moduls/bokning_inloggningskontroll.php'>
							<button type='submit'>Boka tid</button> 
						</form>
						<form method='post' action='recensioner.php'>
							<button type='submit'>Läs recensioner</button>
						</form>";
				echo 	"</div><br>";
			}
		?>
		</div>
	</body>
</html>

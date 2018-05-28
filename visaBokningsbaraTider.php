<!DOCTYPE html>

<?php
	include 'include/moduls/dbConnection.php';
	$datum		=	mysqli_real_escape_string($conn, $_POST['date']);

	$query = "SELECT Datum, StartTid, KlinikNamn, TidId, MassorId FROM massagetid, massor WHERE massagetid.MassorId=massor.MassorId AND BestallarId IS NULL AND '$datum' = massagetid.Datum";
	$result = $conn->query($query);
?>

<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<div id = "tider">
			<h1><b>Tillgängliga tider:</b><h1>
			<?php
				if (session_status() == PHP_SESSION_NONE) {
					session_start();
				}
				while($row = $result->fetch_assoc())
				{
					echo $row["KlinikNamn"], " ", $row["Datum"], " ", $row["StartTid"];
					$_SESSION["bokning"]	=	$row["TidId"];
					$_SESSION["bokning_massor"]	=	$row["MassorId"];

					echo "<button action='include/moduls/bokatid.php'>Boka tid</button> <button>Läs recensioner</button>";
					echo "<br/>";
				}
			?>
		</div>
	</body>
</html>

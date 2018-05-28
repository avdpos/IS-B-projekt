<!DOCTYPE html>

<?php
	include 'include/moduls/dbConnection.php';
	$datum		=	mysqli_real_escape_string($conn, $_POST['date']);

	$query = "SELECT Datum, StartTid, KlinikNamn FROM massagetid, massor WHERE massagetid.MassorId=massor.MassorId AND BestallarId IS NULL AND '$datum' = massagetid.Datum";
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
				
				while($row = $result->fetch_assoc())
				{
					echo $row["KlinikNamn"], " ", $row["Datum"], " ", $row["StartTid"];
					echo "<button>Boka tid</button> <button>Läs recensioner</button>";
					echo "<br/>";
				}
			?>
		</div>
	</body>
</html>

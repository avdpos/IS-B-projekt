<!DOCTYPE html>

<?php>
	include "include/moduls/dbConnection.php";
	$query = "SELECT Datum, StartTid, KlinikNamn FROM massagetid, massor WHERE massagetid.MassorId=massor.MassorId AND BestallarId IS NULL";
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
					echo $row["Namn"], " ", $row["Datum"], " ", $row["StartTid"];
					echo "<br/>";
				}
			?>
		</div>
	</body>
</html>

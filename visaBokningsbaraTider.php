<!DOCTYPE html>

<?php>
	include "include/moduls/dbConnection.php";
	$query = "SELECT Datum, StartTid, Namn FROM BokningsbarTid, Massor WHERE BokningsbarTid.MassorID=Massor.MassorID AND BestallarID IS NULL";
	$result = $conn->query($query);
?>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<div id = "tider">
			<h1><b>Tillgängliga tider:</b><h1>
			<?php>
				while($row = $result->fetch_assoc())
				{
					echo $row["Namn"], " ", $row["Datum"], " ", $row["StartTid"];
					echo "<br/>";
				}
			?>
		</div>
	</body>
</html>

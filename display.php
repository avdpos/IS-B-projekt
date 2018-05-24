<!DOCTYPE html>


<?php>

	include "dbConnection.php";

	$query = "SELECT Datum, StartTid, Namn FROM BokningsbarTid, Massor WHERE BokningsbarTid.MassorID=Massor.MassorID AND BestallarID IS NULL";
	$result = 

</php>


<html>
	<head>
		<title></title>
	</head>
	<body>
		<div id = "tider">
			<h1>Tillgängliga tider:<h1>
			<?php>

				while($row = $result->fetch_assoc())
				{
					echo 	$row["Datum"] $row["StartTid"], $row["Namn"];
					echo "<br/>";
				}
			
			</php>
		</div>
		
	</body>



</html

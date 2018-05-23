<!DOCTYPE html>


<?php>

	include "dbConnection.php";

	$query = "SELECT Datum, StartTid, MassorID, Behandlingstyp FROM BokningsbarTid, Behandling WHERE BokningsbarTid.BehandlingsID=Behandling.BehandlingsID AND BestallarID IS NULL";
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
					echo 	$row["Datum"] $row["StartTid"], $row["Behandlingstyp"], $row["MassörID"];
					echo "<br/>";
				}
			
			</php>
		</div>
		
	</body>



</html

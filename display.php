<!DOCTYPE html>


<?php>

	// m�ste kopplas till databas

	include ...


	$query = "SELECT Datum, StartTid, MassorID, Behandlingstyp FROM BokningsbarTid, Behandling WHERE BokningsbarTid.BehandlingsID=Behandling.BehandlingsID AND BestallarID IS NULL";
	$result = 

</php>


<html>
	<head>
		<title></title>
	</head>
	<body>
		<div id = "tider">
			<h1>Tillg�ngliga tider:<h1>
			<?php>

				while($row = $result->fetch_assoc())
				{
					echo 	$row["Datum"] $row["StartTid"], $row["Behandlingstyp"], $row["Mass�rID"];
					echo "<br/>";
				}
			
			</php>
		</div>
		
	</body>



</html
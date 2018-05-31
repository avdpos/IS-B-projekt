<!DOCTYPE html>

<?php
	include 'include/moduls/dbConnection.php';
	$datum		=	mysqli_real_escape_string($conn, $_POST['date']);
	$tid		=	mysqli_real_escape_string($conn, $_POST['timepicker']);
	// Exakt match av sökning
	$query = "SELECT Datum, StartTid, KlinikNamn, TidId, massor.MassorId FROM massagetid, massor WHERE massagetid.MassorId=massor.MassorId AND BestallarId IS NULL AND '$datum' = massagetid.Datum AND $tid LIKE StartTid" ;
	$result = $conn->query($query);

	//Andra tider samma dag
	$query2 = "SELECT Datum, StartTid, KlinikNamn, TidId, massor.MassorId FROM massagetid, massor WHERE massagetid.MassorId=massor.MassorId AND BestallarId IS NULL AND '$datum' = massagetid.Datum AND $tid NOT LIKE StartTid ORDER BY StartTid";
	$result2 = $conn->query($query2);
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
			if(empty($row  = $result->fetch_assoc()))
			{
				echo	"<div class=\"bokningsbartid\">
							<h4>Det finns ingen bokningsbar tid som börjar klockan: " . $tid . "</h4></div>";
			}
			else
			{
				echo	"<div class=\"bokningsbartid\">
							<h4>Lediga tider som börjar klockan: " . $tid . "</h4></div>";
				
				//nytt resultat eftersom fetch_asoc() tydligen "tömmer" resultatet
				$result = $conn->query($query);

				//whileloop som pushar ut resultatet
				while($row = $result->fetch_assoc())
				{
					echo "<div class=\"bokningsbartid\">", $row["KlinikNamn"], "<br> ", $row["Datum"], " ", $row["StartTid"];
					
					$tid	=	$row["TidId"];
					$massor	=	$row["MassorId"];

					echo	"<form method='post' action='include/moduls/bokning_inloggningskontroll.php'>							
								<input type='hidden' value='$tid' name='tid'>
								<button type='submit'>Boka tid</button> 
							</form>
							
							<form method='post' action='visa_recensioner_for_massorId.php'>
								<input type='hidden' value='$massor' name='massor'>
								<button type='submit'>Läs recensioner</button>
							</form>";
					echo 	"</div><br>";
				}
			}
			
		?>

		<h1><b>Andra tillgängliga tider samma dag:</b><h1>
		<?php

			if(empty($row  = $result2->fetch_assoc()))
			{
				echo	"<div class=\"bokningsbartid\">
							<h4>Det finns ingen bokningsbar tid på andra tider " . $datum . "</h4></div>";
			}
			else
			{
				echo	"<div class=\"bokningsbartid\">
							<h4>Andra lediga tider " . $datum . "</h4></div>";
				
				$result2 = $conn->query($query2);			
				while($row = $result2->fetch_assoc())
				{
					echo "<div class=\"bokningsbartid\">", $row["KlinikNamn"], "<br> ", $row["Datum"], " ", $row["StartTid"];
					
					$tid	=	$row["TidId"];
					$massor	=	$row["MassorId"];
	
					echo	"<form method='post' action='include/moduls/bokning_inloggningskontroll.php'>							
								<input type='hidden' value='$tid' name='tid'>
								<button type='submit'>Boka tid</button> 
							</form>
							
							<form method='post' action='visa_recensioner_for_massorId.php'>
								<input type='hidden' value='$massor' name='massor'>
								<button type='submit'>Läs recensioner</button>
							</form>";
					echo 	"</div><br>";
				}
			}
		?>
		</div>
	</body>
</html>

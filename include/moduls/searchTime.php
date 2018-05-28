

<?php


// vid "sökn" i queryn lägg in det som skickades via sökformuläret

include "dbconnection.php";

$query= "SELECT * FROM massagetid, massoraddress WHERE massagetid.MassorID = massoraddress.MassorID AND Datum = sökn AND Postadress= sökn AND BestallareID IS NULL";

$result = conn->query(query);



?>






<?php

$query= "SELECT * FROM massagetid, massoraddress WHERE massagetid.MassorID = massoraddress.MassorID AND Datum = s�kn AND Postadress= s�kn AND BestallareID IS NULL";

$result = conn->query(query);



?>




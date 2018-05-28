

<?php

$query= "SELECT * FROM massagetid, massoraddress WHERE massagetid.MassorID = massoraddress.MassorID AND Datum = sökn AND Postadress= sökn AND BestallareID IS NULL";

$result = conn->query(query);



?>




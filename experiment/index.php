<html>
<head>   
<link href="calendar.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
include 'calendar.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>


<input type="image" src="tummeupp.png" alt="Submit" width="100" height="100">
</body>
</html>       
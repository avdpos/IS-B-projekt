<html>
<head>   
<link href="calendar.css" type="text/css" rel="stylesheet" />
<link href="tumme.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
include 'calendar.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>


<input type="image" src="tummeupp.png" alt="Submit" width="100" height="100">

<label>
  <input type="radio" name="tummeupp" value="small" />
  <img src="tummeupp.png">
</label>
<label>
  <input type="radio" name="tummener" value="small" />
  <img src="tummener.png">
</label>
</body>
</html>       
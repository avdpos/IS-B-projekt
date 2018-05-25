<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/_header.css">
    <title>Delat labb 2</title>
    <?php include 'include/models/dbconnection.php'?>
</head>

<body>
    <div>
        <?php include 'include/views/_header.php' ?>

        <?php
        if (session_status() == PHP_SESSION_NONE) {
        session_start();
        }
        session_destroy(); ?>
        <h2>You are logged out!<h2>

        <?php include 'include/views/_footer.php'?> 

        
    </div>
            
</body>

</html>
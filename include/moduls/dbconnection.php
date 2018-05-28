<?php
    $servername ="localhost";
    $username   ="delatkonto";
    $password   ="delatkod";
    $dbname     ="massagetid";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);}
?>
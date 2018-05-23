<?php
            $servername ="localhost";
            $username ="MassagtidAdmin";
            $password ="Admin";
            $dbname ="massagetid";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);}
    ?>
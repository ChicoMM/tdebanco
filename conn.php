<?php 
    $servername = "localhost:3305";
    $username = "root";
    $password = "PUC@1234";
    $dbname = "TDE";
    
    $con = new mysqli($servername, $username, $password, $dbname);

    if ($con->connect_error) {
        die("Failed connection". $con->connect_error);
    }
?>
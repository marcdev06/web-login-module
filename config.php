<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'marc');
    define('DB_PASSWORD', 'marc1234');
    define('DB_NAME', 'user_database');
     
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>
<?php
    $host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "userdb";

    // create mysql object
    $connect = mysqli_connect($host, $db_username, $db_password, $db_name);
    if(!$connect){
        // die("connection failed: ". $connect->connect_error);
    }
    else{
        // echo "<h3>Connection Successful </h3>";
    }
?>
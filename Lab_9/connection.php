<?php
if (!isset($_SESSION)) {
    session_start();
}
$host_name = "localhost";
$db_name = "lab9_db";
$user_name = "root";
$password = "";

$connection = mysqli_connect($host_name, $user_name, $password, $db_name);
?>
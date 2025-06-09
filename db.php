<?php
$db_name = 'olypic-sahour';
$username = 'root';
$password = '';
$host = 'localhost';
$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>
<?php
$db_name = 'sql302.infinityfree.com';
$username = 'if0_39163872';
$password = 'VRlmmlVR';
$host = 'if0_39163872_olympic_sahour';
$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>
<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: connection.php?error=you must be connected to access this page");
    exit();
}
$user_id = $_SESSION['user_id'];
$user_email = $_SESSION['email'];
?>
<?php
require_once('../be-account/connect-verifier.php');
require_once('../db.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user_id = $_SESSION['user_id'];
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $last_name = mysqli_real_escape_string ($conn, trim($_POST['last_name']));

    $query = "UPDATE `users` SET `name` = '$name', `last_name` = '$last_name' WHERE `user_id` = $user_id";

    $result = mysqli_query($conn, $query);
    if($result){
        header("Location: ../view/user-profile.php?success=Data changed successfuly");
        exit();
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}

?>
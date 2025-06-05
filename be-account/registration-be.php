<?php

require_once('../db.php');

if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $last_name = mysqli_real_escape_string($conn, trim($_POST['last_name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = trim($_POST['password']);
    $password_verify = trim($_POST['password_verify']);

    if($password !== $password_verify){
        header("Location: ../view/registration.php?error=Passwords dosen't matches");
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO `users` (`email`, `password`, `name`, `last_name`) VALUES ('$email','$hashed_password', '$name', '$last_name' )";
    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: ../view/connection.php?success=Registration successfeul");
        exit();
    }else{
        header("Location: ../view/registration.php?error=Registration failed");
        exit();
    }
}

?>
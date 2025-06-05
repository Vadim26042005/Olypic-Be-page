<?php
require_once('../db.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email =trim($_POST['email']);
    $password =trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    
    if($user && password_verify($password, $user['password'])){
        session_start();
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['email']= $user['email'];
        header("Location: ../view/user-profile.php?success=Login successful");
        exit();
    }else{
        header("Location: ../view/connection.php?error=Invalid email or password");
        exit();
    }

}else{
    header("Location: ../view/connection.php?error=BadRequest");
    exit();
}

?>
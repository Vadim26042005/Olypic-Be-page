<?php
require_once('../be-account/connect-verifier.php');
require_once('../db.php');

$event_id = $_POST['id'] ?? null;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user_id = $_SESSION['user_id'];

    $query = "DELETE FROM `events` WHERE `events`.`id` = $event_id && `user_id` = $user_id";

    $result = mysqli_query($conn, $query);
    if($result){
        header("Location: ../view/create-event.php?success=Data changed successfuly");
        exit();
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}

?>
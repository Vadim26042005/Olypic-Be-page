<?php
require_once('../be-account/connect-verifier.php');
require_once('../db.php');

$event_id = $_POST['id'] ?? null;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user_id = $_SESSION['user_id'];
    $event_name = mysqli_real_escape_string($conn, trim($_POST['event_name']));
    $event_description = mysqli_real_escape_string ($conn, trim($_POST['event_description']));

    $query = "UPDATE `events` SET `event_name` = '$event_name', `event_description` = '$event_description' WHERE `user_id` = $user_id && `id` = $event_id";

    $result = mysqli_query($conn, $query);
    if($result){
        header("Location: ../view/create-event.php?success=Data changed successfuly");
        exit();
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}

?>
<?php

require_once('../db.php');
require_once('../be-account/connect-verifier.php');
$user_id = $_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $event_name = mysqli_real_escape_string($conn, trim($_POST['event_name']));
    $event_description = mysqli_real_escape_string($conn, trim($_POST['event_description']));
    $nb_participant = mysqli_real_escape_string($conn, trim($_POST["nb_participant"]));

    $query = "INSERT INTO `events` (`event_name`, `event_description`, `user_id`, `nb_participant`) VALUES ('$event_name', '$event_description', '$user_id', '$nb_participant' ) ";
    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: ../view/create-event.php?success=Event created");
        exit();
    }else{
        header("Location: ../view/crete.php?error=Failed to create Event");
        exit();
    }
}

?>
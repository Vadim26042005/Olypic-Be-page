<?php
require_once('../be-account/connect-verifier.php');
require_once('../db.php');
$redir = $_SERVER['HTTP_REFERER'];

$event_id = $_POST['id'] ?? null;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user_id = $_SESSION['user_id'];
    $event_name = mysqli_real_escape_string($conn, trim($_POST['event_name']));
    $event_description = mysqli_real_escape_string ($conn, trim($_POST['event_description']));
    $nb_participant = mysqli_real_escape_string($conn, trim($_POST['nb_participant']));

    $query = "UPDATE `events` SET `event_name` = '$event_name', `event_description` = '$event_description', `nb_participant` = '$nb_participant' WHERE `user_id` = $user_id && `id` = $event_id";
    
    $result = mysqli_query($conn, $query);
    if($result){
        header("Location: " . $redir);
        exit();
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}

?>
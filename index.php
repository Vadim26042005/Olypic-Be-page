<?php
session_start();
require_once('db.php');
$events = [];

$result = mysqli_query($conn, "SELECT * FROM events");


if($result){
    while($row = mysqli_fetch_assoc($result)){
        $events[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #F5F5F5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            min-height: 100vh;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #F75A5A;
        }

        form {
            background-color: #fff;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        
        form input[type="text"]{
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #6DE1D2;
            border-radius: 8px;
        }
        textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #6DE1D2;
            border-radius: 8px;
        }
        p{
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #6DE1D2;
            border-radius: 8px;
        }
        button {
            background-color: #FFD63A;
            color: #000;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
            margin-right: 10px;
        }

        button:hover {
            background-color: #FFA955;
        }

        .event-block {
            background-color: #fff;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        .event-block form {
            display: flex;
            flex-direction: column;
        }

        .event-block form input[type="text"]{
            margin-bottom: 10px;
        }
        textarea{
            margin-bottom: 10px;
        }

        .event-block form:last-child {
            margin-top: 10px;
        }

        a {
            display: inline-block;
            margin: 8px 0;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            color: #000;
            background-color: #FFD63A;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #FFA955;
        }

        strong a {
            background-color: #F75A5A;
            color: white;
        }

        strong a:hover {
            background-color: #d84747;
        }
    </style>
</head>
<?php include('./components/header.php')?>
<body>

    <h1>Bienvenue sur la page d'accueil du site</h1>

    <h3>Événements deja existants: <?php echo count($events);?> </h3>
    <div class="links">
        <a href="view/create-event.php">Créer un évènement</a>
    </div>

    <?php include('components/self-event.php')?>

</body>
<?php include('components/footer.php')?>
</html>
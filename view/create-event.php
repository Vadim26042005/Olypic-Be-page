<?php
require_once('../db.php');
require_once('../be-account/connect-verifier.php');

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
    <title>Gestion des Événements</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: #f5f5f5;
            color: #222;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #F75A5A;
            margin-bottom: 20px;
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

        form input[type="text"] {
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

        .error {
            color: #F75A5A;
            font-weight: bold;
            margin-top: 10px;
        }

        table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            vertical-align: top;
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

        .event-block form input[type="text"] {
            margin-bottom: 10px;
        }

        .event-block form:last-child {
            margin-top: 10px;
        }
    </style>
</head>
<?php include('../components/header.php')?>
<body>

    <h1>Créer un Événement</h1>

    <form action="../be-events/create.php" method="post">
        <label for="event_name">Nom de l'événement</label>
        <input type="text" name="event_name" placeholder="Entrez le nom de l'événement" required>

        <label for="event_description">Description</label>
        <input type="text" name="event_description" placeholder="Entrez la description de l'événement" required>

        <?php if(isset($_GET['error'])): ?>
            <div class="error">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
        <?php endif; ?>

        <button type="submit" name="submit_button">Créer l'événement</button>
    </form>

    <h1>Événements existants</h1>

    <?php foreach($events as $event): ?>
        <div class="event-block">
            <form action="../be-events/update-data.php" method="post">
                <label for="event_name">Nom de l'événement</label>
                <input type="text" name="event_name" value="<?php echo htmlspecialchars($event['event_name']); ?>">

                <label for="event_description">Description</label>
                <input type="text" name="event_description" value="<?php echo htmlspecialchars($event['event_description']); ?>">

                <input type="hidden" name="id" value="<?php echo $event['id']; ?>">
                <button type="submit">Appliquer les modifications</button>
            </form>

            <form action="../be-events/delete-event.php" method="post">
                <input type="hidden" name="id" value="<?php echo $event['id']; ?>">
                <button type="submit" style="background-color: #F75A5A; color: white;">Supprimer</button>
            </form>
        </div>
    <?php endforeach; ?>

</body>
<?php include('../components/footer.php')?>
</html>

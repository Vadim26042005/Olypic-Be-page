<?php
require_once('../be-account/connect-verifier.php');
require_once('../db.php');

$user_id = $_SESSION['user_id'] ?? null;
$query = "SELECT * FROM users WHERE user_id = $user_id";

$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil utilisateur</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            min-height: 100vh;
        }

        h1 {
            color: #F75A5A;
            margin-bottom: 20px;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        input[type="text"],[type="email"] {
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
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #FFA955;
        }

        a {
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
            padding: 10px 16px;
            background-color: #6DE1D2;
            border-radius: 8px;
            color: black;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #48c1b3;
        }

        .links {
            margin-top: 30px;
            display: flex;
            gap: 20px;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<?php include('../components/header.php')?>
<body>

    <a href="../index.php">← Retour à l'accueil</a>
    <h1>Profil Utilisateur</h1>

    <form action="../be-profile/update-data.php" method="post">
        <label for="name">Prénom :</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>">

        <label for="last_name">Nom :</label>
        <input type="text" name="last_name" value="<?php echo htmlspecialchars($user['last_name']); ?>">

        <label for="email">Email :</label>
        <p type="email" name="email"><?php echo htmlspecialchars($user['email']); ?><p>

        <button type="submit">Enregistrer les modifications</button>
    </form>

    <div class="links">
        <a href="create-event.php">Créer un évènement</a>
        <a href="../be-account/disconnect.php" style="background-color: #F75A5A; color: white;">Déconnexion</a>
    </div>

</body>
<?php include('../components/footer.php')?>
</html>

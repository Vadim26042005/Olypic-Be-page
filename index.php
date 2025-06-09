<?php
session_start();
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

        p {
            margin: 10px 0;
            font-size: 1.1em;
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

    <?php if (!isset($_SESSION['user_id'])): ?>
        <p>Veuillez vous connecter ici :</p>
        <a href="view/connection.php">Page de connexion</a>

        <p>Ou créez un compte ici :</p>
        <a href="view/registration.php">Page d'inscription</a>

    <?php else: ?>
        <p>Accédez à votre profil :</p>
        <a href="view/user-profile.php">Profil</a><br><br>

        <strong><a href="../be-account/disconnect.php">Déconnexion</a></strong>
    <?php endif; ?>

</body>
<?php include('./components/footer.php')?>
</html>
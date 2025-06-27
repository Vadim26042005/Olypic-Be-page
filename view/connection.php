<?php
require_once('../db.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #F5F5F5;
            color: #222;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #F75A5A;
            margin-bottom: 20px;
        }

        form {
            background-color: #FFFFFF;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #6DE1D2;
            border-radius: 8px;
            font-size: 16px;
        }

        button {
            background-color: #FFD63A;
            color: #000;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #FFA955;
        }

        p, a {
            margin-top: 20px;
            color: #444;
            text-decoration: none;
        }

        a:hover {
            color: #F75A5A;
        }
    </style>
</head>
<body>

    <h1>Page de Connexion</h1>

    <form action="../be-account/connection-be.php" method="post">
        <input type="email" name="email" id="email" placeholder="Entrez votre adresse e-mail" required>
        <input type="password" name='password' id="password" placeholder="Entrez votre mot de passe" required>
        <button type="submit">Se connecter</button>
    </form>

    <p>Pas de compte ? Allez vous inscrire 👉</p>
    <a href="registration.php">Page d'inscription</a><br>
    <a href="../index.php">Page d'accueil</a>

</body>
</html>
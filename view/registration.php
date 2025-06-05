<?php
require_once('../db.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: #F5F5F5;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #222;
        }

        h1 {
            color: #F75A5A;
            margin-bottom: 20px;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }

        form input[type="text"],
        form input[type="password"] {
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
        }

        button:hover {
            background-color: #FFA955;
        }

        .error {
            color: #F75A5A;
            font-weight: bold;
            margin-top: 10px;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            color: #000;
            background-color: #6DE1D2;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #48c1b3;
        }

        p {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Inscription</h1>

    <form action="../be-account/registration-be.php" method="post">
        <label for="name">Prénom</label>
        <input type="text" name="name" placeholder="Entrez votre prénom" required>

        <label for="last_name">Nom</label>
        <input type="text" name="last_name" placeholder="Entrez votre nom" required>

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Entrez votre email" required>

        <label for="password">Mot de passe</label>
        <input type="password" name="password" placeholder="Entrez votre mot de passe" required>

        <label for="password_verify">Confirmez le mot de passe</label>
        <input type="password" name="password_verify" placeholder="Confirmez votre mot de passe" required>

        <?php if(isset($_GET['error'])): ?>
            <div class="error">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
        <?php endif; ?>

        <button type="submit" name="submit_button">S'inscrire</button>
    </form>

    <p>Vous avez déjà un compte ?</p>
    <a href="connection.php">Page de connexion</a><br>
    <a href="../index.php">Page d'accueil</a>

</body>
</html>

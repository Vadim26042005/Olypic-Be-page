<?php
if (session_status() === PHP_SESSION_NONE) session_start();

// Calculate base path relative to root
$currentPath = $_SERVER['SCRIPT_NAME'];
$depth = substr_count($currentPath, '/');
$repeatCount = max(0, $depth - 2);  // Never less than 0
$basePath = str_repeat('../', $repeatCount);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: #F5F5F5;
            color: #222;
        }

        header {
            background-color: #6DE1D2;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            color: #000;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            text-decoration: none;
            margin: 0 15px;
            color: #000;
            font-weight: 600;
        }

        nav a:hover {
            color: #F75A5A;
        }
    </style>
</head>
<body>
<header>
    <h1>Bienvenue sur le site Olympique</h1>
    <nav>
        <a href="<?= $basePath ?>./index.php">Accueil</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="<?= $basePath ?>view/user-profile.php">Profil</a>
                <a href="<?= $basePath ?>be-account/disconnect.php">Déconnexion</a>
            <?php else: ?>
                <a href="<?= $basePath ?>view/connection.php">Connexion</a>
                <a href="<?= $basePath ?>view/registration.php">Inscription</a>
            <?php endif; ?>
    </nav>
</header>        
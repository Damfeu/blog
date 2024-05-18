<?php
if(isset($_COOKIE['username'])){
    header('Location: /BLOGS');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../ASSETS/CSS/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <?php

    require_once '../includes/menu.php';
    ?>
    <div class="signin">
        <?php
            if (isset($_GET['email']) && $_GET['email'] == 'error') {
                echo "<h2> Email invalide. Veuillez saisir entre 5 et 10 caractères.</h2>";

            }
            if (isset($_GET['password']) && $_GET['password'] == 'error') {
                echo "<h2> Les mots de passe saisis ne concordent pas. Veuillez les vérifier.</h2>";

            }
        ?>
        <form action="/BLOGS/processing/authentification.php" method="POST">

            <label for="username">Adresse email</label>
            <input type="email" name="email" id="email" placeholder="Saisir votre adresse email" required>

            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Saisir le nom d'utilisateur ou le pseudnyme ici" minlength="5" maxlength="20" required>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe ici" minlength="8" maxlength="20" required>

            <label for="confirmation">Confirmation de mot de passe</label>
            <input type="password" name="confirmation" id="confirmation" placeholder="Confirmez votre mot de passe ici" minlength="8" maxlength="20" required>

            <button type="submit">S'inscrire</button>

            <p>Déja un compte? Connectez vous en cliquant <a href="/BLOGS/pages/connexion.php?page=connexion">ici</a></p>
        </form>
    </div>
</body>

</html>
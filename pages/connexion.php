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
    <title>Connexion</title>
</head>

<body>
    <?php

    require_once '../includes/menu.php';
    ?>
    <div class="login">

        <?php
        if (isset($_GET['user']) && $_GET['user'] == 'unknow') {
            echo "<h2>les identifiants saisi sont incorrects. Veillez les vérifier et réessayer!</h2>";
        }

        ?>
        <form action="/BLOGS/processing/login.php" method="POST">

            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username"
                placeholder="Saisir le nom d'utilisateur ou lepsezudonyme ici" minlength="5" maxlength="20" required>

            <label for="password">Mot de pass</label>
            <input type="password" name="password" id="password" placeholder="Saisir votre mots de pass ici "
                minlength="8" maxlength="20" required>

            <button type="submit">Se connecter</button>

            <p>Pas encore un compte? Inscrivez-vous en cliquant <a
                    href="/BLOGS/pages/connexion.php?page=connexion">ici</a>
            </p>
        </form>

    </div>

</body>

</html>
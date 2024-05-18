<?php
 if(!isset($_COOKIE['username'])){
    header('Location:/BLOGS/pages/connexion.php?page=connexion');
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../ASSETS/CSS/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ASSETS/CSS/style.css">
    <link href="../ASSETS/summernote/summernote-lite.min.css" rel="stylesheet">
    <title>Blog</title>

</head>

<body>

    <?php

    require_once '../includes/menu.php'
    ?>

    <div class="article">
        <form action="../processing/blogging.php" method="POST" enctype="multipart/form-data">
            <label for="title">Saisir le titre de l'article</label>
            <input type="text" name="title" id="title" required>

            <label for="Short_description">Saisir une brève description de l'article </label>
            <textarea  name="short_description"id="short_description" placeholder="Saisire une brève description de votre article"></textarea>

            <label for="long_description">Saisir une longue description de votre article </label>
           <textarea name="long_description" id="long_description" placeholder="Saisir une longue description..."></textarea>

           <label for="file">Joindre un fichier à votre article </label>
           <input type="file" name="file" id="file">

           <button type="submit">Soumettre</button>

           <button type="reset">Annuler</button>


        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../ASSETS/summernote/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#long_description').summernote({
                height:200,
            });
            
            
        });
    </script>
    

    </script>

</body>

</html>
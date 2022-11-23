<!-- Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php

session_start();


if(isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites']++;
} else{
    $_SESSION['nbvisites']=1;
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>bonjour</h1>
    <form action="" method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
    <?php
    if(isset($_POST['reset'])){
        $_SESSION['nbvisites']=1;
    }
    echo "le nombre de visite est de : " . $_SESSION['nbvisites']
    ?>
</body>
</html>
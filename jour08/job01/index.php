<!-- Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php

session_start();

if(isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites']++;
} else{
    $_SESSION['nbvisites']=0;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08-job01</title>
</head>
<body>
    <h1>Nombre de visites sur la page</h1>
    <?php
    if(isset($_POST['reset'])){
        $_SESSION['nbvisites']=0;
    }
    echo "le nombre de visite est de : " . $_SESSION['nbvisites']
    ?>
    <form action="" method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>
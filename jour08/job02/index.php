<!-- Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php

setcookie('nbvisites', '0', time()+3600);

if(isset($_POST['reset'])){
    $_COOKIE['nbvisites']=0;
}
echo "le nombre de visite est de : " . $_COOKIE['nbvisites'];

if(isset($_COOKIE['nbvisites'])){
    $newnbvisites = $_COOKIE['nbvisites']+1;
    setcookie('nbvisites', $newnbvisites, time()+3600);
} else { 
    $_COOKIE['nbvisites'] =0;
}



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08-job02</title>
</head>
<body>
    <h1>Job02-Jour08</h1>

    <form action="" method="post">
        <input type="submit" name="reset" value="reset">
    </form>


</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04_Job01</title>
</head>
<body>
    <?php
    $compteur = 0;

    foreach ($_GET as $item){
        $compteur++;
    } 
    ?>
    <h1>Jour04_Job01</h1>

    <form action="" method="get">
        <input type="text" name="nom" placeholder="Nom">
        <br>
        <input type="text" name="prenom" placeholder="Prénom">
        <br>
        <input type="text" name="adresse" placeholder="Adresse">
        <br>
        <input type="submit">
    </form>
    
    <br>
    <br>

    <?php echo ('le nombre d\'argument $_GET est : ' . $compteur); ?>

</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04_job06</title>
</head>
<body>
    <h1>Jour04_job06</h1>
    <form action="" method="get">
        <input type="text" name="nombre" placeholder="Entre un nombre">
        <input type="submit">
    </form>
    <?php
    if (isset($_GET["nombre"])){
        if($_GET["nombre"] %2 == 0){
            echo "le nombre est pair";
        }
        else{
            echo "le nombre est impair";
        }
    }

    ?>
</body>
</html>
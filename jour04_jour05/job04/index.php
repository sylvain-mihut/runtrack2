<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04_Job04</title>
</head>
<body>

    <h1>Jour04_Job04</h1>

    <form action="" method="post">
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

    <table>
    <tr>
        <td>Argument</td>
        <td>Valeur</td>
    </tr>
    
    <?php
        foreach ($_POST as $key => $value){
            echo ("<tr><td>" . $key . "</td><td>" . $value . "</td></tr>");
        } 
    ?>
    </table>



</body>
</html>
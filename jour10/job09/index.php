<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez l’ensemble des informations des salles en les triant par capacité
décroissante. Affichez le résultat de cette requête dans un tableau html. La première
ligne de votre tableau html doit contenir le nom des champs. Les suivantes doivent
contenir les données présentes dans votre base de données. -->

<?php 
$mysqli = new mysqli("localhost", "root", "", "jour09");
// var_dump($mysqli);

$REQUEST = $mysqli->query("SELECT * FROM `salles` ORDER by capacite DESC");
$result_fetch_etudiants = $REQUEST->fetch_all();
// var_dump($result_fetch_etudiants);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10-job09</title>
</head>
<body>
    <h1>Jour10-job09</h1>
    <table border="1px">
        <thead>
            <td>Id</td>
            <td>Nom</td>
            <td>Id_étage</td>
            <td>capacité</td>
        </thead>
        <tbody>
        <?php 
            foreach ($result_fetch_etudiants as $ligne) {
                echo "<tr>";
                foreach ($ligne as $value){
                    echo "<td>". $value . "</td>";
                }
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>
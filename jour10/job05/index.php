<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez l’ensemble des informations des étudiants qui ont moins de 18 ans.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données. -->

<?php 
$mysqli = new mysqli("localhost", "root", "", "jour09");
// var_dump($mysqli);

$REQUEST = $mysqli->query("SELECT prenom, nom, naissance, sexe, email FROM etudiants WHERE naissance > '2004-01-01'");
$result_fetch_etudiants = $REQUEST->fetch_all();
// var_dump($result_fetch_etudiants);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10-job05</title>
</head>
<body>
    <h1>Jour10-job05</h1>
    <table border="1px">
        <thead>
            <td>Prénom</td>
            <td>Nom</td>
            <td>Naissance</td>
            <td>Sexe</td>
            <td>Email</td>
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
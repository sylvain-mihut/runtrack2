<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez la superficie totale des étages dans une colonne nommée
“superficie_totale”. Affichez le résultat de cette requête dans un tableau html. La
première ligne de votre tableau html doit contenir le nom des champs. Les suivantes
doivent contenir les données présentes dans votre base de données.  -->

<?php 
$mysqli = new mysqli("localhost", "root", "", "jour09");
// var_dump($mysqli);

$REQUEST = $mysqli->query("SELECT SUM(superficie) FROM `etage`; ");
$result_fetch_etudiants = $REQUEST->fetch_all();
// var_dump($result_fetch_etudiants);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour10-job06</title>
</head>
<body>
    <h1>Jour10-job06</h1>
    <table border="1px">
        <thead>
            <td>Superficie_totale</td>
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
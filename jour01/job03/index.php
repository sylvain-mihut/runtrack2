<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// création de variable de plusieurs types

// boolean
$etudiant = true;
// chaine de caractères
$prenom = "sylvain";
// entier
$age = 27;
// float
$prixducafe = 0.40;
// null
$vide = "";

?>

 <!-- tableau -->
<table>
    <tr>
        <th>type</th>
        <th>nom</th>
        <th>valeur</th>
    </tr>
    <tr>
        <td><?php echo gettype($etudiant) ?></td>
        <td>etudiant</td>
        <td><?php echo $etudiant ?></td>
    </tr>
    <tr>
        <td><?php echo gettype($prenom) ?></td>
        <td>prenom</td>
        <td><?php echo $prenom ?></td>
    </tr>
    <tr>
        <td><?php echo gettype($age) ?></td>
        <td>age</td>
        <td><?php echo $age ?></td>
    </tr>
    <tr>
        <td><?php echo gettype($prixducafe) ?></td>
        <td>prix du café</td>
        <td><?php echo $prixducafe ?></td>
    </tr>
    <tr>
        <td><?php echo gettype($vide) ?></td>
        <td>vide</td>
        <td><?php echo $vide ?></td>
    </tr>
</table>


</body>
</html>

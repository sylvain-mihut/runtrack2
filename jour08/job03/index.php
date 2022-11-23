<!-- Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. -->

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08-job03</title>
</head>
<body>
    <h1>Jour08-job03</h1>
    <form action="" method="post">
        <input type="text" name="prenom" placeholder="Entrez votre nom">
    <input type="submit" value="Afficher">
    <input type="submit" name="reset"value="Reset">
    </form>
    <?php 
    if (isset($_POST['prenom'])){
        $_SESSION['prenom'][] = $_POST['prenom'];
    }
    if(isset($_POST['reset'])){
        unset ($_SESSION['prenom']);
    }
    ?>
    <ul>
        <?php
            if(isset($_SESSION['prenom'])){
                foreach ($_SESSION['prenom'] as $index => $value) {
                    echo '<li>' . $value . '</li>';
                }
            }
        ?>
    </ul>
</body>
</html>
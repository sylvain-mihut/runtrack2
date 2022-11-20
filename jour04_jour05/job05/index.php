<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04_Job0</title>
</head>
<body>

    <h1>Jour04_Job05</h1>
    <p>
        le choix de la methode post est cohérant car nous ne voulont pas afficher les information dans l'url de la page 
    </p>

    <form action="" method="post">
        <input type="text" name="user_name" placeholder="Nom d'utilisateur">
        <br>
        <input type="password" name="password" placeholder="Mot de passe">
        <br>
        <input type="submit">
    </form>
    <br>
    <br>
    <?php
    if(isset($_POST["user_name"]) && isset($_POST["user_name"])){
        if($_POST["user_name"] == 'John' && $_POST["password"]  == 'Rambo' ){
            echo "C'est pas ma guerre.";
        } else{
            echo "Votre pire cauchemar.";
        }
    }
    
    ?>
</body>
</html>
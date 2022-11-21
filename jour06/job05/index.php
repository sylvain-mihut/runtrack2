<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php
    if(isset($_GET['Style'])){
    if($_GET['Style'] == "dark"){
        echo "<link rel=\"stylesheet\" href=\"style1.css\">";
    } elseif($_GET['Style'] == "img"){
        echo "<link rel=\"stylesheet\" href=\"style2.css\">";
    } elseif($_GET['Style'] == "cyberpunk"){
        echo "<link rel=\"stylesheet\" href=\"style3.css\">";
    }
    }
    
    ?>
    <title>jour06_job05</title>
</head>
<body>

    <h1>Jour06 job05</h1>

    <br>
    <form action="" method="get">
        <select name="Style">
            <option value="null">-->Choisissez un Style<--</option>
            <option value="dark">Mode sombre</option>
            <option value="img">Galactique</option>
            <option value="cyberpunk">Cyberpunk</option>
        </select>
        <br>
        <br>

        <input type="submit">
    </form>
    
</body>
</html>
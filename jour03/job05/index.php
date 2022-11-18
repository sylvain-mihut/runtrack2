<?php

$str = "on n’est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    'consonnes' => ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l','m', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x','z'],
    'voyelles' => ['a', 'e', 'i', 'o', 'u', 'y']
];

$comptage_consonnes = 0;
$comptage_voyelles =0;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job05</title>
</head>
<body>
    <?php
    for($i = 0 ; isset($str[$i]); $i++){
        foreach($dic as $type => $letters){
            if($type == 'consonnes' ){
                for($j = 0 ; isset($letters[$j]); $j++){
                    if($letters[$j] == $str[$i]){
                        $comptage_consonnes++;

                    }

                }
            }
            else if($type == 'voyelles' ){
                for($j1 = 0 ; isset($letters[$j1]); $j1++){
                    if($letters[$j1] == $str[$i]){
                        $comptage_voyelles++;

                    }

                }
            }

        }

    }
    ?>
    <table border="1px">
        <tr>
            <th>consonnes</th>
            <th>voyelles</th>
        </tr>
        <tr>
            <td><?php echo $comptage_consonnes ?></td>
            <td><?php echo $comptage_voyelles ?></td>
        </tr>

    </table>
</body>
</html>
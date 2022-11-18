<?php

$str = "Les choses que l'on possede finissent par nous posseder";

$comptage = 0;

echo "<b> $str </b><br><br>";

for($i = 0; isset($str[$i]); $i++){
    $comptage++;
}
for($j = $comptage-1; $j>=0; $j--){
    echo $str[$j];
}

?>
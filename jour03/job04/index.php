<?php

$str = "Dans l'espace, personne ne vous entend crier";
$comptage = 0;

for ($i = 0 ; isset($str[$i]) ; $i++){
    $comptage++;
    echo  $str[$i];    
}
echo ". | le nombre de caractère présent dans la phrase est : $comptage";

?>
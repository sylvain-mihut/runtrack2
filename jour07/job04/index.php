<!-- Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième, “$b”, est un nombre.
La fonction doit retourner le résultat de l’opération. -->

<?php

function calcule(int $a, string $operation, int $b){
    if($operation === '+') {
        $result= $a+$b;
    }
    elseif ($operation === '-') {
        $result= $a-$b;
    }
    elseif($operation === '*') {
        $result= $a*$b;
    }
    elseif($operation === '/') {
        $result= $a/$b;
    }
    else{
        $result="input incorect";
    }
    return $result;
}

echo calcule(4,'+',6);

?>
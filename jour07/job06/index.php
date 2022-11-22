<!-- Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre une
chaîne de caractères nommée “$str”.
Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
qu’elle doit la modifier de sorte à ce que :
● les “A” deviennent des “4”,
● les “B” des “8”,
● les “E” des “3”,
● les “G” des “6”,
● les “L” des “1”,
● les “S” des “5”
● les “T” des “7”.
Cela est valable que l’on crie ou non (majuscules et minuscules). -->

<!-- Bateau
     84734u -->

<?php

function leetSpeak($str) {
    for($i = 0; isset($str[$i]); $i++) {
        if($str[$i] == "A" || $str[$i] == "a"){
            $str[$i] = "4";
        } elseif($str[$i] == "B" || $str[$i] == "b"){
            $str[$i] = "8";
        } elseif($str[$i] == "T" || $str[$i] == "t"){
            $str[$i] = "7";
        } elseif($str[$i] == "E" || $str[$i] == "e"){
            $str[$i] = "3";
        } elseif($str[$i] == "G" || $str[$i] == "g"){
            $str[$i] = "6";
        } elseif($str[$i] == "S" || $str[$i] == "s"){
            $str[$i] = "5";
        } elseif($str[$i] == "L" || $str[$i] == "l"){
            $str[$i] = "1";
        } else{
            $str[$i] = $str[$i]; 
        }
    }
    return $str;
}

echo "Conversion du mot 'bateau' : ". leetSpeak("Bateau")

?>
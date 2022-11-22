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
$majuscule = ['A', 'B', 'E', 'G', 'L', 'S', 'T'];
$minuscule = ['a', 'b', 'e', 'g', 'l', 's', 't'];
$chiffre   = ['4', '8', '3', '6', '1', '5', '7'];
// Je parcourt ma chaine de caractère "$str" en iterant a chaque caractère grace a "$i"
    for($i = 0 ; isset($str[$i]); $i++){
        // je parcourt mon tableau "$majuscule"
        for ($j=0; isset($majuscule[$j]); $j++) { 
            // je compare mon tableau "$majuscule" index "$j" a ma chaine de caractère "$str" index "$i"
            if ($majuscule[$j] == $str[$i]) {
                // alors je remplace "$str index $i" par sont equivalent dans le tableau "$chiffre a l'index $j" 
                $str[$i] = $chiffre[$j];
            }
        } 
        for ($j=0; isset($minuscule[$j]); $j++) {  
            if ($minuscule[$j] == $str[$i]) {
                $str[$i] = $chiffre[$j];
            }
        }
    }
        
        return $str;
}
echo leetSpeak("Bateau")

?>
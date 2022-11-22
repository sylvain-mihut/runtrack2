<!-- Créez une fonction nommée “occurrences($str, $char)”.
Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un
caractère nommé “$char”.
Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.
Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans
$str sera : 2 -->

<?php 

function occurrences($str, $char) {
    $compteur = 0;
    for($i = 0; isset($str[$i]); $i++) {
        if($str[$i]=== $char) {
            $compteur++;
        }
    }
    return $compteur;
}

echo 'le nombre de "e" dans Hello La Plateforme est : ', occurrences("Hello La Plateforme_!", "e");

?>
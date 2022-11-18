<?php 

$str = "I'm sorry Dave I'm afraid I can't do that";

$voyelle = ['I', 'a', 'e', 'i', 'o', 'u', 'y'];

echo $str;
echo "<br>";

for ($i = 0; isset($str[$i]) ; $i++){
    for ($j = 0 ; isset($voyelle[$j]) ; $j++){
        if ($str[$i] == $voyelle[$j]){
            echo $str[$i];
            echo "<br>";
        }
    }

}
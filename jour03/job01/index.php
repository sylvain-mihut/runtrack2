<?php

$recipes = [200, 204, 173, 98, 171, 404, 459];

for ( $i = 0 ; isset($recipes[$i]) ; $i++) {
    if($recipes[$i] % 2 == 0){
        echo $recipes[$i] ." le nombre est pair";
        echo "<br>";
    } else {
        echo $recipes[$i] . " le nombre est impair";
        echo "<br>";
    }
}

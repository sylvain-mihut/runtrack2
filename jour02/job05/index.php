<?php

for ($i = 0 ; $i <= 1000 ; $i++){
    
    $div = 0;
    
    for ($p=1 ; $p <= $i ; $p++){
        if($i % $p==0){
            $div++;
        }
    }

    if ($div == 2){
    echo $i;
    echo "<br>";
    }
    
}

?>
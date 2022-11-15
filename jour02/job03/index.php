<?php

for($i = 0 ; $i <=100; $i++){


    if($i >=0 && $i <=20){
        // echo "<i>";
        echo "<i> $i </i>";
        echo "<br>";
        // echo ;
    }

    else if ($i == 42){
        echo "La Plateforme_";
        echo "<br>";
    }

    else if($i >=25 && $i <=50){
        // echo "<u>";
        echo "<u> $i </u>";
        echo "<br>";
    }


    else{
        echo $i;
        echo "<br>";
    }
}

?>
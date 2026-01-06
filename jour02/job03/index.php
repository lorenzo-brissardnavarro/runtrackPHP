<?php

for ($i = 0 ; $i < 101 ; $i++){
    if ($i >= 0 and $i <= 20){
        echo "<em>".$i."</em><br>";
    } elseif ($i >= 25 and $i <= 50) {
        if ($i == 42) {
            echo "La Plateforme_ <br>";
        } else {
            echo "<u>".$i."</u><br>";
        }
    } else {
        echo $i."<br>";
    }
}
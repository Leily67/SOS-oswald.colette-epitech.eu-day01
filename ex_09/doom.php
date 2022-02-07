<?php

function draw_triangle($nb) {
   
    for ($i = 0; $i < $nb; $i++){
        for ($j = 0; $j <= $nb-$i; $j++){
            echo " ";
        }
        for ($j =0; $j <= $i+$i; $j++){
            echo "*";
        }
        echo "\n";
    }
}
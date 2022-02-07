<?php

function draw_triangle($nb) {
   
    $k = 2 * $nb - 2;
 
    for ($i = 0; $i < $nb; $i++)
    {
        for ($j = 0; $j < $k; $j++)
            echo " ";
        $k = $k - 1;
        for ($j = 0; $j <= $i; $j++ )
        {
            echo "* ";
        }
        echo "\n";
    }
}
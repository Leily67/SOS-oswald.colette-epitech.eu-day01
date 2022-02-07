<?php

function draw_square($nb){
    for ($i = 0; $i < $nb; $i++)
    {
        for ($j = 1; $j <= $nb; $j++)
        {
            echo "*";
        }
        echo "\n";
    }
}
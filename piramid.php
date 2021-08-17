<?php

function piramid($symbol, $length)
{
    $length = intval($length);
    for ($i = 1; $i <= $length; $i++) { // Baris
        for ($j = $length; $j >= $i; $j--) { // Space
            echo "-";
        }
        for ($k = 1; $k <= $i; $k++) { // Simbol
            echo $symbol;
        }
        echo "<br>";
    }
}

echo piramid('*', 10);

/**
 * Result : 
 * ----------*
 * ---------**
 * --------***
 * -------****
 * ------*****
 * -----******
 * ----*******
 * ---********
 * --*********
 * -**********
 */

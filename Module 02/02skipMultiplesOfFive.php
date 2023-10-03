<?php

/* 

Create a PHP script that prints numbers from 1 to 50 using a for loop. 
However, when the loop encounters a multiple of 5, 
it should skip that number 
using the continue statement and continue to the next iteration.

*/

echo PHP_EOL;


function allNumber($startPoint, $endPoint, $condition)
{
    echo "===========For Loop Start==========\n\n";
    
    for ($i = $startPoint; $i <= $endPoint; $i++) {
        
        if($i % $condition == 0){
            continue;
        }
        else{
            
            echo $i;
        }

        for ($j = 1; $j <= $i - 1; $j++) {
        }
        if ($j == (($endPoint % $condition == 0) ? ($endPoint-1) : $endPoint)) {
            echo ".";
        } else {
            echo ", ";
        }
    }
    
    echo PHP_EOL;
    echo PHP_EOL;
    echo "===========For Loop End==========\n";
}

function input($startPoint, $endPoint, $condition)
{
    allNumber($startPoint, $endPoint, $condition);
}

input(1, 50, 5);
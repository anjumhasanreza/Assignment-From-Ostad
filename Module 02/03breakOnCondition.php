<?php


/* 

Write a PHP program that calculates and prints the first 10 Fibonacci numbers. 
But, if a 
Fibonacci number is greater than 100, break out of the loop using the break statement.

*/


echo PHP_EOL;


function fibonacci($veryOld, $old, $new, $lenth, $condition)
{
    
    echo "===========For Loop Start==========\n\n";
    for ($i = 0; $i < $lenth; $i++) {
        echo $veryOld . " ";
        $veryOld = $old;
        $old = $new;
        $new = $veryOld + $old;
        
        if($veryOld >= $condition){
            break;
        }
    }
    
    echo PHP_EOL;
    echo PHP_EOL;
    echo "===========For Loop End==========\n";

}


function input($veryOld, $old, $new, $lenth, $condition)
{
    fibonacci($veryOld, $old, $new, $lenth, $condition);
}


input(0, 1, 1, 10, 100);
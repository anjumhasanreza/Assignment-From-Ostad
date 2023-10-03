<?php


/* 

Write a PHP function to print the first 15 numbers in the Fibonacci series. 
You should take
this 15 as an argument of a function and use a for loop to generate these numbers 
and print
them by calling the function.

*/


echo PHP_EOL;



function fibonacci($veryOld, $old, $new, $lenth)
{

    echo "===========For Loop Start==========\n\n";
    for ($i = 0; $i < $lenth; $i++) {
        echo $veryOld . " ";
        $veryOld = $old;
        $old = $new;
        $new = $veryOld + $old;
    }

    echo PHP_EOL;
    echo PHP_EOL;
    echo "===========For Loop End==========\n";
}


function input($veryOld, $old, $new, $lenth)
{
    fibonacci($veryOld, $old, $new, $lenth);
}

input(0, 1, 1, 15);
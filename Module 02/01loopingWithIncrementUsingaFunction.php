<?php


/* 

Write a PHP function that uses a for loop to print all even numbers 
from 1 to 20, 
but with a step of 2. 
In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. 
The function should take the arguments like start as 1, end as 20 and 
step as 2. 
You must call the function to print.

Also do the same using while loop and do-while loop also.

*/



echo PHP_EOL;



function evenNumber($startPoint, $endPoint, $step)
{
    echo "===========For Loop Start==========\n\n";
    for ($i = $startPoint; $i <= $endPoint; $i= $i + $step) {

        if ($i % 2 != 0) {

            echo $i+1;

            for ($j = 1; $j <= $i; $j++) {
            }
            if ($j == $endPoint) {
                echo ".";
            } else {
                echo ", ";
            }
        }
    }
    
    echo PHP_EOL;
    echo PHP_EOL;
    echo "===========For Loop End==========\n";
}






function evenNumberWhile($startPoint, $endPoint, $step)
{
    echo PHP_EOL;
    echo "===========While Loop Start==========\n\n";
    
    $i = $startPoint;
    
    while ($i <= $endPoint) {
        
        if ($i % 2 != 0) {
            echo $i+1;
            
            for ($j = 1; $j <= $i; $j++) {
            }
            if ($j == $endPoint) {
                echo ".";
            } else {
                echo ", ";
            }
        }
        
        $i = $i + $step;
        

    }
    
    
    
    echo PHP_EOL;
    echo PHP_EOL;
    
    echo "===========While Loop End==========\n";
}



function evenNumberDoWhile($startPoint, $endPoint, $step)
{
    echo PHP_EOL;
    echo "===========Do While Loop Start==========\n\n";
    
    $i = $startPoint;
    do {
        if ($i % 2 != 0) {
            
            echo $i+1;
            for ($j = 1; $j <= $i; $j++) {
            }
            if ($j == $endPoint) {
                echo ".";
            } else {
                echo ", ";
            }
        }
        $i = $i + $step;
    } while ($i <= $endPoint);

    
    echo PHP_EOL;
    echo PHP_EOL;
    
    echo "===========Do While Loop End==========\n";
    echo PHP_EOL;
}

function input($startPoint, $endPoint, $step)
{
    evenNumber($startPoint, $endPoint, $step);
    evenNumberWhile($startPoint, $endPoint, $step);
    evenNumberDoWhile($startPoint, $endPoint, $step);
}

input(1, 20, 2);
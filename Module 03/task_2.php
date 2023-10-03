<?php 


/* 

Create an array called $numbers containing the numbers 1 to 10. 
Write a PHP function which takes the "$numbers" array as an argument 
to remove the even numbers from the array and print the resulting array.

*/

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


function checkOddNumber($numbers){
    return $numbers % 2 !== 0;
};

$printNumber = array_filter($numbers, 'checkOddNumber');


echo PHP_EOL;
echo PHP_EOL;

print_r($printNumber);

echo PHP_EOL;
echo PHP_EOL;



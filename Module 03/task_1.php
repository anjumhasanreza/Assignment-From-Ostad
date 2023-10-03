<?php 


/* 

Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". 
Write a PHP function which takes "$text" as an argument to:

Convert the string to all lowercase.

Replace "brown" with "red" in the string.

Print the modified text.

*/

$text = "The quick brown fox jumps over the lazy dog.";

function modifyText($text) {
    
    $lowercaseText = strtolower($text);

    $modifiedText = str_replace("brown", "red", $lowercaseText);

    echo PHP_EOL;
    echo PHP_EOL;
    
    
    print_r($modifiedText);
    
    
    echo PHP_EOL;
    echo PHP_EOL;
}

modifyText($text);


<?php

// strlen() 
$my_str = 'Welcome to Tutorial Republic';
// Outputs: 28
echo strlen($my_str);

$my_str = 'The quick brown fox jumps over the lazy dog.';
// Outputs: 9
echo str_word_count($my_str);

$my_str = 'If the facts do not fit the theory, change the facts.';
// Display replaced string
echo str_replace("facts", "truth", $my_str);

$my_str = 'If the facts do not fit the theory, change the facts.';
// Perform string replacement
str_replace("facts", "truth", $my_str, $count);
// Display number of replacements performed
echo "The text was replaced $count times.";

$my_str = 'You can do anything, but not everything.';
// Display reversed string
echo strrev($my_str);

?>
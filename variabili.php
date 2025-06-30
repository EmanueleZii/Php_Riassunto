<?php
// Declaring variables
$txt = "Hello World!";
$number = 10;

// Displaying variables value

echo $txt; // Output: Hello World!
echo $number; // Output: 10

// Defining variables

$txt = "Hello World!";
$num = 123456789;
$colors = array("Red", "Green", "Blue");

// Displaying variables

echo $txt;
echo "<br>";
echo $num;
echo "<br>";
echo $colors[0];

// Type of data

$a = 123; // decimal number
var_dump($a);
echo "<br>";
$b = -123; // a negative number
var_dump($b);
echo "<br>";

$c = 0x1A; // hexadecimal number
var_dump($c);
echo "<br>";
$d = 0123; // octal number
var_dump($d);

$str1 = 'Hello world!';
echo $str;
echo "<br>";
$str2 = "Hello world!";
echo $str2;
echo "<br>";
$str3 = 'Stay here, I\'ll be back.';
echo $str3;

$mobile1 = 1.234;
var_dump($mobile1);
echo "<br>";
$mobile2 = 10.2e3;
var_dump($mobile2);
echo "<br>";
$mobile3 = 4E-10;
var_dump($mobile3);

// Assign the value TRUE to a variable

$show_error = true;
var_dump($show_error);

?>
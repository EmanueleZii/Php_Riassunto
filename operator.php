<?php
//Operatori aritmetici PHP
$x = 10;
$y = 4;

echo($x + $y); // 0utputs: 14
echo($x - $y); // 0utputs: 6
echo($x * $y); // 0utputs: 40
echo($x / $y); // 0utputs: 2.5
echo($x % $y); // 0utputs: 2

//Operatori di assegnazione PHP
$x = 10;
echo $x; // Outputs: 10
$x = 20;
$x += 30;
echo $x; // Outputs: 50
$x = 50;
$x -= 20;
echo $x; // Outputs: 30
$x = 5;
$x *= 25;
echo $x; // Outputs: 125
$x = 50;
$x /= 10;
echo $x; // Outputs: 5
$x = 100;
$x %= 15;
echo $x; // Outputs: 10


//Operatori di confronto PHP
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z); // Outputs: boolean true
var_dump($x === $z); // Outputs: boolean false
var_dump($x != $y); // Outputs: boolean true
var_dump($x !== $z); // Outputs: boolean true
var_dump($x < $y); // Outputs: boolean true
var_dump($x > $y); // Outputs: boolean false
var_dump($x <= $y); // Outputs: boolean true
var_dump($x >= $y); // Outputs: boolean false

//Operatori di incremento e decremento PHP
$x = 10;
echo ++$x; // Outputs: 11
echo $x; // Outputs: 11
$x = 10;
echo $x++; // Outputs: 10
echo $x; // Outputs: 11
$x = 10;
echo --$x; // Outputs: 9
echo $x; // Outputs: 9
$x = 10;
echo $x--; // Outputs: 10
echo $x; // Outputs: 9

//Operatori logici PHP
$year = 2014;
// Leap years are divisible by 400 or by 4 but not 100
if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0)))
{
echo "$year is a leap year.";
} else{
echo "$year is not a leap year.";
}

//Operatori di stringa PHP
$x = "Hello";
$y = " World!";
echo $x . $y; // Outputs: Hello World!
$x .= $y;
echo $x; // Outputs: Hello World!

//Operatori di array PHP
$x = array("a" => "Red", "b" => "Green", "c" => "Blue");
$y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");

$z = $x + $y; // Union of $x and $y

var_dump($z);

var_dump($x == $y); // Outputs: boolean false
var_dump($x === $y); // Outputs: boolean false
var_dump($x != $y); // Outputs: boolean true
var_dump($x <> $y); // Outputs: boolean true
var_dump($x !== $y); // Outputs: boolean true

//PHP Spaceship Operator PHP 7

// Comparing Integers
echo 1 <=> 1; // Outputs: 0
echo 1 <=> 2; // Outputs: -1
echo 2 <=> 1; // Outputs: 1
// Comparing Floats
echo 1.5 <=> 1.5; // Outputs: 0
echo 1.5 <=> 2.5; // Outputs: -1
echo 2.5 <=> 1.5; // Outputs: 1
// Comparing Strings
echo "x" <=> "x"; // Outputs: 0
echo "x" <=> "y"; // Outputs: -1
echo "y" <=> "x"; // Outputs: 1

?>
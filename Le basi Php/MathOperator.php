<?php
    echo 7 + 3; // 0utputs: 10
    echo 7 - 2; // 0utputs: 5
    echo 7 * 2; // 0utputs: 14
    echo 7 / 2; // 0utputs: 3.5
    echo 7 % 2; // 0utputs: 1

    echo 5 + 4 * 10; // 0utputs: 45
    echo (5 + 4) * 10; // 0utputs: 90
    echo 5 + 4 * 10 / 2; // 0utputs: 25
    echo 8 * 10 / 4 - 2; // 0utputs: 18
    echo 8 * 10 / (4 - 2); // 0utputs: 40
    echo 8 + 10 / 4 - 2; // 0utputs: 8.5
    echo (8 + 10) / (4 - 2); // 0utputs: 9

    echo abs(5); // 0utputs: 5 (integer)
    echo abs(-5); // 0utputs: 5 (integer)
    echo abs(4.2); // 0utputs: 4.2 (double/float)
    echo abs(-4.2); // 0utputs: 4.2 (double/float)

    // Round fractions up
    echo ceil(4.2); // 0utputs: 5
    echo ceil(9.99); // 0utputs: 10
    echo ceil(-5.18); // 0utputs: -5
    
    // Round fractions down
    echo floor(4.2); // 0utputs: 4
    echo floor(9.99); // 0utputs: 9
    echo floor(-5.18); // 0utputs: -6

    echo sqrt(9); // 0utputs: 3
    echo sqrt(25); // 0utputs: 5
    echo sqrt(10); // 0utputs: 3.1622776601684
    echo sqrt(-16); // 0utputs: NAN


    // Generate some random numbers
    echo rand() . "<br>";
    echo rand() . "<br>";
    // Generate some random numbers between 1 and 10 (inclusive)
    echo rand(1, 10) . "<br>";
    echo rand(1, 10) . "<br>";

    // Convert Decimal to Binary
    echo decbin(2); // 0utputs: 10
    echo decbin(12); // 0utputs: 1100
    echo decbin(100); // 0utputs: 1100100
    
    // Convert Binary to Decimal
    echo bindec(10); // 0utputs: 2
    echo bindec(1100); // 0utputs: 12
    echo bindec(1100100); // 0utputs: 100

    // Convert decimal to hexadecimal
    echo dechex(255); // 0utputs: ff
    echo dechex(196); // 0utputs: c4
    echo dechex(0); // 0utputs: 0
    // Convert hexadecimal to decimal
    echo hexdec('ff'); // 0utputs: 255
    echo hexdec('c4'); // 0utputs: 196
    echo hexdec(0); // 0utputs: 0

    // Convert decimal to octal
    echo decoct(12); // 0utputs: 14
    echo decoct(256); // 0utputs: 400
    echo decoct(77); // 0utputs: 115
   
    // Convert octal to decimal
    echo octdec('14'); // 0utputs: 12
    echo octdec('400'); // 0utputs: 256
    echo octdec('115'); // 0utputs: 77

    // Convert decimal to binary
    echo base_convert('12', 10, 2); // 0utputs: 1100
    // Convert binary to decimal
    echo base_convert('1100', 2, 10); // 0utputs: 12
    // Convert decimal to hexadecimal
    echo base_convert('10889592', 10, 16); // 0utputs: a62978
    // Convert hexadecimal to decimal
    echo base_convert('a62978', 16, 10); // 0utputs: 10889592
    // Convert decimal to octal
    echo base_convert('82', 10, 8); // 0utputs: 122
    // Convert octal to decimal
    echo base_convert('122', 8, 10); // 0utputs: 82
    // Convert hexadecimal to octal
    echo base_convert('c2c6a8', 16, 8); // 0utputs: 60543250
    // Convert octal to hexadecimal
    echo base_convert('60543250', 8, 16); // 0utputs: c2c6a8
    // Convert octal to binary
    echo base_convert('42', 8, 2); // 0utputs: 100010
    // Convert binary to octal
    echo base_convert('100010', 2, 8); // 0utputs: 42
    // Convert hexadecimal to binary
    echo base_convert('abc', 16, 2); // 0utputs: 101010111100
    // Convert binary to hexadecimal
    echo base_convert('101010111100', 2, 16); // 0utputs: abc
?>
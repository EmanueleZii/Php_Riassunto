<?php
 
    // Defining function
    function test(){
        $greet = "Hello World!";
        echo $greet;
    } 
 
    test(); // Outputs: Hello World!
    echo $greet; // Generate undefined variable error
    
    /*
    $greet2 = "Hello World!";
    // Defining function
    function test2(){
        echo $greet2;
    } 
    
    test2(); // Generate undefined variable error
    echo $greet2; // Outputs: Hello World!

    $greet = "Hello World!";
    
    // Defining function
    function test(){
        global $greet;
        echo $greet;
    } 
    
    test(); // Outpus: Hello World!
    echo $greet; // Outpus: Hello World!
    
    // Assign a new value to variable
    $greet = "Goodbye";
    test(); // Outputs: Goodbye
    echo $greet; // Outputs: Goodbye
    */

    //function
?>
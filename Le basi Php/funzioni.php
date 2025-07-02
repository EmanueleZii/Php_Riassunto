<?php
    // Defining function
    function whatIsToday(){
        echo "Today is " . date('l');
    } 
    
    // Calling function
    whatIsToday();

    // Defining function
    function getSum($num1, $num2){
        $sum = $num1 + $num2;
        echo "Sum of the two numbers $num1 and $num2 is : $sum";
    } 

    // Calling function
    getSum(10, 20);

    // Defining function
    function customFont($font, $size=1.5) {
        echo "<p style=\"font-family: $font; font-size:{$size}em;\">Hello, world!</p>";
    }
    
    // Calling function
    customFont("Arial", 2);
    customFont("Times", 3);
    customFont("Courier");

    // Defining function
    function getSum2($num1, $num2){
        $total = $num1 + $num2;
        return $total;
    } 

    // Printing returned value
    echo getSum2(5, 10); // Outputs: 15

    // Defining function
    function divideNumbers($dividend, $divisor){
        $quotient = $dividend / $divisor;
        $array = array($dividend, $divisor, $quotient);
        return $array;    
    } 

    // Assign variables as if they were an array
    list($dividend, $divisor, $quotient) = divideNumbers(10, 2);
    echo $dividend; // Outputs: 10
    echo $divisor; // Outputs: 2
    echo $quotient; // Outputs: 5


    /* Defining a function that multiply a number
    by itself and return the new value */
    function selfMultiply(&$number){
        $number *= $number;
        return $number;
    }

    $mynum = 5;
    echo $mynum; // Outputs: 5
    selfMultiply($mynum);
    echo $mynum; // Outputs: 25

    //Recursive functions

    // Defining recursive function
    function printValues($arr) {
        global $count;
        global $items;
        
        // Check input is an array
        if(!is_array($arr)){
            die("ERROR: Input is not an array");
        }
        /*
        Loop through array, if value is itself an array recursively
        call the
        function else add the value found to the output items array,
        and increment counter by 1 for each value found
        */
        foreach($arr as $a){
            if(is_array($a)){
                printValues($a);
            } else{
                $items[] = $a;
                $count++;
            }
        }
            
        // Return total count and values found in array
        return array('total' => $count, 'values' => $items);
    } 

    // Define nested array
    $species = array(
            "birds" => array(
            "Eagle",
            "Parrot",
            "Swan"
            ),
            "mammals" => array(
            "Human",
            "cat" => array(
            "Lion",
            "Tiger",
            "Jaguar"
            ),
            "Elephant",
            "Monkey"
            ),
            "reptiles" => array(
            "snake" => array(
            "Cobra" => array(
            "King Cobra",
            "Egyptian cobra"
            ),
            "Viper",
            "Anaconda"
            ),
            "Crocodile",
            "Dinosaur" => array(
            "T-rex",
            "Alamosaurus"
            )   
        )
    );

    // Count and print values in nested array
    $result = printValues($species);
    echo $result['total'] . ' value(s) found: ';
    echo implode(', ', $result['values']);
?>
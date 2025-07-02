<?php
    $d = date("D");
    
    if($d == "Fri"){
        echo "Have a nice weekend!";
    }

    $d = date("D");
    
    if($d == "Fri"){
        echo "Have a nice weekend!";
    } else{
        echo "Have a nice day!";
    }

    
    $d = date("D");
    if($d == "Fri") {
        echo "Have a nice weekend!";
    } elseif($d == "Sun") {
        echo "Have a nice Sunday!";
    } else {
        echo "Have a nice day!";
    }

    if($age < 18){
        echo 'Child'; // Display Child if age is less than 18
    } else{
        echo 'Adult'; // Display Adult if age is greater than or equal to 18
    }

    //ternary operator
    echo ($age < 18) ? 'Child' : 'Adult';

    //Null Coalescing PHP 7
    $name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';
    $name = $_GET['name'] ?? 'anonymous';
?>
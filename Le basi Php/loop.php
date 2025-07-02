<?php
    // WHILE LOOP
    $i = 1;
    
    while($i <= 3)
    {
        $i++;
        echo "The number is " . $i . "<br>";
        
    } 
  
    $i = 1;
    do {
        $i++;
        echo "The number is " . $i . "<br>";
    } 
    while($i <= 3);

    for ($i=1; $i<=3; $i++) {
        echo "The number is " . $i . "<br>";
    }   

    $colors = array("Red", "Green", "Blue");

    // Loop through colors array
    foreach($colors as $value) {
        echo $value . "<br>";
    }

    $superhero = array (
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
        "age" => 18
    );

    // Loop through superhero array
    foreach($superhero as $key => $value) {
        echo $key . " : " . $value . "<br>";
    } 
?>
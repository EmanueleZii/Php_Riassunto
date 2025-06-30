<?php
    $colors = array("Red", "Green", "Blue");
   
    var_dump($colors);
    echo "<br>";
   
    $color_codes = array(
        "Red" => "#ff0000",
        "Green" => "#00ff00",
        "Blue" => "#0000ff"
    );
   
    var_dump($color_codes);

    // Define an indexed array
    $colors = array("Red", "Green", "Blue");

    $colors[0] = "Red";
    $colors[1] = "Green";
    $colors[2] = "Blue";

    
    // Define an associative array
    $ages = array("Peter"=>22, "Clark"=>32, "John"=>28);

    $ages["Peter"] = "22";
    $ages["Clark"] = "32";
    $ages["John"] = "28";

    // Define a multidimensional array
    $contacts = array(
        array(
            "name" => "Peter Parker",
            "email" => "peterparker@mail.com",
        ),
        array(
            "name" => "Clark Kent",
            "email" => "clarkkent@mail.com",
        ),
        array(
            "name" => "Harry Potter",
            "email" => "harrypotter@mail.com",
        )
    );

    // Access nested value
    echo "Peter Parker's Email-id is: " . $contacts[0]["email"];

    // Define array
    $cities = array("London", "Paris", "New York");
    
    // Display the cities array
    print_r($cities);

    // Define array
    $cities = array("London", "Paris", "New York");
    // Display the cities array
    var_dump($cities);
?>
<?php require "my_variables.php"; ?>
<?php require "my_functions.php"; ?>

<?php include "header.php"; ?>
<body>
<?php include "menu.php"; ?>

<h1>Welcome to Our Website!</h1>
<p>Here you will find lots of useful information.</p>
<?php
    // Including file
    require "my_functions.php";
    // Calling the function
    multiplySelf(2); // Output: 4
    echo "<br>";
    // Including file once again
    require "my_functions.php";
    // Calling the function
    multiplySelf(5); // Doesn't execute
?>

<?php include "footer.php"; ?>

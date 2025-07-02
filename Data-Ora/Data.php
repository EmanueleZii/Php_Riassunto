<?php
$today = date("d/m/Y");
echo $today;

echo date("d/m/Y") . "<br>";
echo date("d-m-Y") . "<br>";
echo date("d.m.Y");

echo date("h:i:s") . "<br>";
echo date("F d, Y h:i:s A") . "<br>";
echo date("h:i a");

// Executed at now
$timestamp = time();
echo($timestamp);

$timestamp = 1394003958;
echo(date("F d, Y h:i:s", $timestamp));

// Create the timestamp for a particular date
echo mktime(15, 20, 12, 5, 10, 2014);

// Get the weekday name of a particular date
echo date('l', mktime(0, 0, 0, 4, 1, 2014));

// Executed at March 05, 2014
$futureDate = mktime(0, 0, 0, date("m")+30, date("d"), date("Y"));
echo date("d/m/Y", $futureDate);
?>
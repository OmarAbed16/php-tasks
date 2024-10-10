<?php
$rangeStart = 11;
$rangeEnd = 20;

$numbers = range($rangeStart, $rangeEnd);
shuffle($numbers);

$randomNumbers = array_slice($numbers, 0, 10);
echo implode(" ", $randomNumbers);
?>

<?php
function isLeapYear($year) {
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}

$year = 2013;

echo isLeapYear($year) ? "This year is a leap year" : "This year is not a leap year";
?>

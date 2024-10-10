<?php
$inputString = '\"\1+2/3*2:2-3/4*3';
$outputString = preg_replace('/[^0-9]/', ' ', $inputString);
$outputString = preg_replace('/\s+/', ' ', trim($outputString));
echo $outputString;  
?>

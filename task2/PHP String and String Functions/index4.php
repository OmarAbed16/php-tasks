<?php
$originalString = 'The brown fox';
$insertString = 'quick';
$position = 4;

$newString = substr_replace($originalString, ' ' . $insertString . ' ', $position, 0);
echo $newString; 





$originalString = '<br>The quick brown fox';
$firstWord = strtok($originalString, ' ');
echo $firstWord; 




?>

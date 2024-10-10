<?php
function findFirstDifference($string1, $string2) {
    $length1 = strlen($string1);
    $length2 = strlen($string2);
    $minLength = min($length1, $length2);
    
    for ($i = 0; $i < $minLength; $i++) {
        if ($string1[$i] !== $string2[$i]) {
            echo "First difference between two strings at position " . ($i + 1) . ": \"" . $string1[$i] . "\" vs \"" . $string2[$i] . "\"\n";
            return;
        }
    }
    
    echo "No differences found within the common length of both strings.\n";
}

$string1 = 'dragonball';
$string2 = 'dragonboll';

findFirstDifference($string1, $string2);
?>

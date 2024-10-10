<?php
function nextLetter($char) {
    if ($char === 'z') {
        return 'a';
    } elseif ($char === 'Z') {
        return 'A';
    }
    $nextChar = chr(ord($char) + 1);
    return $nextChar;
}

$input = 'd';
echo nextLetter($input);
?>

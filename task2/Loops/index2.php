<?php
function countCInText($inputText) {
    $charToCount = 'c';
    $count = 0;
    for ($i = 0; $i < strlen($inputText); $i++) {
        if (strtolower($inputText[$i]) === $charToCount) {
            $count++;
        }
    }
    return $count;
}

$text = "Orange Coding Academy";
$input = "Orang";
echo "Number of 'c' characters in '{$text}': " . countCInText($text);
?>

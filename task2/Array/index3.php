<?php
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$lengths = array_map('strlen', $words);

$shortest = min($lengths);
$longest = max($lengths);

echo "The shortest array length is $shortest. The longest array length is $longest.";
?>

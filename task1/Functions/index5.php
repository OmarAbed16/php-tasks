<?php
function isPalindrome($string) {
    $cleanedString = preg_replace("/[^A-Za-z]/", '', strtolower($string));
    return $cleanedString === strrev($cleanedString);
}

$input = "Eva, can I see bees in a cave?";

if (isPalindrome($input)) {
    echo "Yes, it is a palindrome";
} else {
    echo "No, it is not a palindrome";
}
?>

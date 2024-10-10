<?php
function formatTimeString($numericString) {
    if (strlen($numericString) !== 6 || !ctype_digit($numericString)) {
        return "Invalid input. Please provide a 6-digit numeric string.";
    }
    
    $hours = substr($numericString, 0, 2);
    $minutes = substr($numericString, 2, 2);
    $seconds = substr($numericString, 4, 2);

    return "{$hours}:{$minutes}:{$seconds}";
}

$input = '095119';
$output = formatTimeString($input);
echo $output;
?>

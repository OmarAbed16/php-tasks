<?php
function convertToLowerCase($colors) {
    return array_map('strtolower', $colors);
}


$colors = array("RED", "BLUE", "WHITE", "YELLOW");


$lowercaseColors = convertToLowerCase($colors);
print_r($lowercaseColors);
?>

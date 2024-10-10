<?php
$array1 = array(2, 0, 10, 12, 6);

$filteredArray = array_filter($array1, function($value) {
    return $value != 0;
});

$lowest = min($filteredArray);

echo $lowest;
?>

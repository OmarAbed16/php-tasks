<?php
function insert($array, $newItem, $position) {
    $position = $position - 1;
    array_splice($array, $position, 0, $newItem);
    return $array;
}

$array = [1, 2, 3, 4, 5];
$location = 4;
$newItem = '$';
$result = insert($array, $newItem, $location);
echo implode(" ", $result);
?>

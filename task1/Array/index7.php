<?php

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);


$mergedArray = array_merge($array1, $array2);


echo "Array\n(\n\n";
foreach ($mergedArray as $key => $value) {
   
    if (is_string($key)) {
        echo "<Br> [$key] => $value\n";
    } else {
        echo "<Br> [$key] => $value\n";
    }
}
echo "\n)\n";

?>

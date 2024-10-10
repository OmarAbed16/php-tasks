<?php


$array = [ 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
65, 64, 68, 73, 75, 79, 73];

echo (array_sum($array)/count($array))."<br>";

asort($array);
 $new_array=array_unique($array);
 $new_array = array_values($new_array);
 print_r(array_unique($array));
echo "<br>";
$lower_sum="";
for($i=0;$i<5;$i++){

$lower_sum .=" ".$new_array[$i];
}
echo "<br>List of seven lowest temperatures: ".$lower_sum;




$higher_sum = "";
for ($i = count($new_array) - 1; $i > (count($new_array) - 6); $i--) {
    $higher_sum .= " " . $new_array[$i];
}
echo "<br>List of five highest temperatures: " . $higher_sum;



?>

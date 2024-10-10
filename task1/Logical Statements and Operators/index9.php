<?php
$arr=[60,86,95,63,55,74,79,62,50];

grade($arr);
function grade($arr){
$avg=array_sum($arr)/count($arr);
echo $avg."<br>";
if($avg<60){echo "Grade:F";}
else if($avg<70){echo "Grade:D";}
else if($avg<80){echo "Grade:C";}
else if($avg<90){echo "Grade:B";}
else if($avg<100){echo "Grade:A";}



}


?>
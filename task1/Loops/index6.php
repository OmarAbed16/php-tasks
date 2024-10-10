<?php
echo factorial(5);


function factorial($num){
$sum=1;
for($i=$num;$i>0;$i--)
{
    $sum *=$i;
}
return $sum;
}
?>
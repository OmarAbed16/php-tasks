<?php
$inputString = 'The quick brown fox jumps over the lazy dog';
$arr=explode(" ",$inputString);
print_r($arr);
$sum="";
for($i=0;$i<5;$i++){
$sum .=" ".$arr[$i];
}
echo $sum;
?>

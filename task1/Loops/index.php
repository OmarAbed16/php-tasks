<?php
$sum="";
for($i=1;$i<=10;$i++){
$sum .=$i."-";
}
echo substr($sum,0,-1);
?>
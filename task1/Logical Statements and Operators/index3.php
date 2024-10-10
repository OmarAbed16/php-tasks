<?php
echo is_in_range(20);

function is_in_range($num){
if($num<=50 && $num >=20)
return true;
return false;
}
?>
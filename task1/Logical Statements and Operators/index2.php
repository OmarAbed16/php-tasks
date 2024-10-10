<?php
echo is_multiple(9);

function is_multiple($num){
if($num %3==0)
return true;
return false;
}
?>
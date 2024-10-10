<?php
$result="";


$char="1";
for($i=1;$i<=5;$i++){
   
    for($j=1;$j<=5;$j++){


        $result .="1";
        }
        $result=substr($result,0,-1*$i).str_repeat($char,$i);
        $char++;
        
        $result .="<br>";
}
echo $result;
?>
<?php
$result="";


$char="A";
for($i=1;$i<=5;$i++){
   
    for($j=1;$j<=5;$j++){


        $result .="A";
        }
        $result=substr($result,0,-1*$i).str_repeat($char,$i);
        $char++;
        
        $result .="<br>";
}
echo $result;
?>
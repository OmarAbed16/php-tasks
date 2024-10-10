<?php
$result="";


$char="1";
for($i=1;$i<=5;$i++){
   
    for($j=1;$j<=$i;$j++){


        $result .=$char;
        $char++;
        }
       
       
        
        $result .="<br>";
}
echo $result;
?>
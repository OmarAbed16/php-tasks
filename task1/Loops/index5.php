<?php
$result="";


$char="0";
for($i=1;$i<=5;$i++){
   
    for($j=1;$j<=5;$j++){

if($j==$i){
    $result .=$i;
}else{
    $result .="0";
}
        
        }
       
        
        $result .="<br>";
}
echo $result;
?>
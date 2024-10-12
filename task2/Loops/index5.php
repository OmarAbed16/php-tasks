<?php

function printDiamond($columns) {
 for($i=1;$i<$columns;$i++){
$char="A";
$len=$columns-$i-2;

echo str_repeat("-",$columns-$i);
    for($j=0;$j<$i;$j++){

    echo $char++;
    }
    echo str_repeat("-",$columns-$i);
echo "<br>";

 }



 for($i=$columns;$i>0;$i--){
    $char="A";
    echo str_repeat("-",$columns-$i);
    for($j=1;$j<$i-1;$j++){

    echo $char++;
    }
    echo str_repeat("-",$columns-$i);
    echo "<br>";
    
     }


}



$column=6;
printDiamond($column);

?>
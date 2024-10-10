<?php

function printDiamond($rows) {
    for ($i = 1; $i <= $rows; $i++) {
        
     
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo " ";
        }
        

        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }

        echo "<br>";
    }

    for ($i = $rows - 1; $i >= 1; $i--) {
        
    
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo " ";
        }

 
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }

        echo "<br>";
    }
}


$row = 5;
printDiamond($row);

?>
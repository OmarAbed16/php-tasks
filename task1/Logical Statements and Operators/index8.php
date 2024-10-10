<?php
number_state(-60);

function number_state($num){
if($num>0){echo "positive";}
else if($num<0){echo "negative";}
else{
    echo "is zero";
}

}
?>
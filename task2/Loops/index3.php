<?php
$result="";
for ($i=1; $i <=50 ; $i++) { 
    if($i %3==0 && $i %5==0){$result .=" FizzBuzz";}
    else if($i %3==0){$result .=" Fizz";}
    else if($i %5==0){$result .=" Buzz";}
    else{$result .=$i;}
}
echo $result;
?>
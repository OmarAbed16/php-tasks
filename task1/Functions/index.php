<?php
function is_prime($num){
    if ($num <= 1) return false;
    if ($num <= 3) return true;
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i === 0) return false;
    }
    return true;

}

echo is_prime(5);
?>
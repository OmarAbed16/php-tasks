<?php
function fibonacci_sequence($n) {
    $a = 0;
    $b = 1;
    echo $a . ", ";
    
    for ($i = 1; $i < $n; $i++) {
        echo $b;
        if ($i < $n - 1) {
            echo ", ";
        }
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
}

$num = 10;
fibonacci_sequence($num);
?>

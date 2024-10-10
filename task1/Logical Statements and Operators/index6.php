<?php
function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 == 0) {
                return "Division by zero error!";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Invalid operation!";
    }
}


$num1 = 20;
$num2 = 10;
$operation = 'add';

echo "Result: " . calculator($num1, $num2, $operation);
?>

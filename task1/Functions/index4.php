<?php
function isArmstrongNumber($number) {
    $sum = 0;
    $digits = str_split($number);

    foreach ($digits as $digit) {
        $sum += $digit ** 3;
    }

    return $sum === $number;
}

$input = 407;
if (isArmstrongNumber($input)) {
    echo "$input is Armstrong Number";
} else {
    echo "$input is not Armstrong Number";
}

?>
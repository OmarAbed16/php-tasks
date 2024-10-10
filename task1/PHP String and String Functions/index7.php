<?php
function generateRandomPassword($length = 10) {
    $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomPassword = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, $charactersLength - 1);
        $randomPassword .= $characters[$randomIndex];
    }

    return $randomPassword;
}

$passwordLength = 10;
$randomPassword = generateRandomPassword($passwordLength);
echo "Generated Random Password: $randomPassword\n";
?>

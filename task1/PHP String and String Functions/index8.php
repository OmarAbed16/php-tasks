<?php
function replaceFirstWord($sentence, $newWord) {
    return preg_replace('/^\w+/', $newWord, $sentence);
}

$sentence = 'That new trainee is so genius.';
$newWord = 'Our';
$result = replaceFirstWord($sentence, $newWord);
echo $result;
?>

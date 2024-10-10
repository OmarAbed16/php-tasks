<?php
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i;
        if ($i < 248) {
            echo ",";
        }
    }
}
?>

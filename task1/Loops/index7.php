<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <table border="1" cellpadding="3px" cellspacing="0px">
        <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 6; $j++) {
                    $result = $j * $i;
                    echo "<td>{$j} * {$i} = {$result}</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>

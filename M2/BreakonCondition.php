<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$first = 0;
$second = 1;

        echo "The first 10 Fibonacci numbers:\n";

        for ($i = 0; $i < 10; $i++) {
            if ($first > 100) {
                break;
            }

            echo $first . " ";

            $next = $first + $second;
            $first = $second;
            $second = $next;
        }

        echo "\n";
        ?>

</body>
</html>
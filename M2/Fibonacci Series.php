<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .fibonacci {
            font-size: 18px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>Fibonacci Numbers</h1>
    
    <div class="fibonacci">
        <?php
        function printFibonacciNumbers($count) {
            $first = 0;
            $second = 1;

            echo "The first $count Fibonacci numbers:<br>";

            for ($i = 0; $i < $count; $i++) {
                echo $first . " ";
                $next = $first + $second;
                $first = $second;
                $second = $next;
            }
        }

        $numCount = 15;
        printFibonacciNumbers($numCount);
        ?>
    </div>
</body>
</html>

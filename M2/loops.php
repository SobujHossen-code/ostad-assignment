<!DOCTYPE html>
<html>
<head>
    <title>Even Numbers</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            background-color: #f0f0f0;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Even Numbers from 1 to 20</h1>

        <h2>Using a For Loop:</h2>
        <?php
        function printEvenNumbersForLoop($start, $end, $step) {
            for ($i = $start; $i <= $end; $i += $step) {
                if ($i % 2 == 0) {
                    echo $i . ' ';
                }
            }
        }

        $start = 1;
        $end = 20;
        $step = 2;

        printEvenNumbersForLoop($start, $end, $step);
        ?>

        <h2>Using a While Loop:</h2>
        <?php
        function printEvenNumbersWhileLoop($start, $end, $step) {
            while ($start <= $end) {
                if ($start % 2 == 0) {
                    echo $start . ' ';
                }
                $start += $step;
            }
        }

        $start = 1;
        $end = 20;
        $step = 2;

        printEvenNumbersWhileLoop($start, $end, $step);
        ?>

        <h2>Using a Do-While Loop:</h2>
        <?php
        function printEvenNumbersDoWhileLoop($start, $end, $step) {
            do {
                if ($start % 2 == 0) {
                    echo $start . ' ';
                }
                $start += $step;
            } while ($start <= $end);
        }

        $start = 1;
        $end = 20;
        $step = 2;

        printEvenNumbersDoWhileLoop($start, $end, $step);
        ?>
    </div>
</body>
</html>

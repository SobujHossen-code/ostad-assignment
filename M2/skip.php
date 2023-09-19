<!DOCTYPE html>
<html>
<head>
    <title>Numbers from 1 to 50 (Skipping Multiples of 5)</title>
</head>
<body>
    <h1>Numbers from 1 to 50 (Skipping Multiples of 5)</h1>
    <ul>
    <?php
        for ($i = 1; $i <= 50; $i++) {
            if ($i % 5 == 0) {
                // Skip multiples of 5
                continue;
            }
            echo "<li>$i</li>";
        }
    ?>
    </ul>
</body>
</html>

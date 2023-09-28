<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        function sortGradesDescending($grades) {
            rsort($grades);

            print_r($grades);
        }

        $grades = array(85, 92, 78, 88, 95);

        sortGradesDescending($grades);
        ?>
</body>
</html>

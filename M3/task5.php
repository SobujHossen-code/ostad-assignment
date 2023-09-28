<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>⚡Password Generator</title>
</head>
<body>
    <?php
    function generatePassword($length) {
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $specialChars = '!@#$%^&*()_+';

        $allChars = $lowercase . $uppercase . $numbers . $specialChars;

        $totalChars = strlen($allChars);

        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, $totalChars - 1);
            $password .= $allChars[$randomIndex];
        }

        return $password;
    }
    $password = generatePassword(12);
    echo $password;
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function manipulateText($text) {
    $text = strtolower($text);

    $text = str_replace("brown", "red", $text);

    echo $text;
}

$text = "The quick brown fox jumps over the lazy dog.";

manipulateText($text);
?>

</body>
</html>
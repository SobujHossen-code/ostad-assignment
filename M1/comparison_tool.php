<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f7f7f7;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: 93%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            margin-top:15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: black;
        }
        p {
            margin-top: 20px;
            font-weight: bold;
        }
        span{
            font-size:30px;
            color:#007bff;
        }
    </style>
</head>
<body>

<?php
$number1 = '';
$number2 = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    $result = ($number1 > $number2) ? $number1 : $number2;
}
?>

<h1>Comparison Tool</h1>
<form method="post">
    <label for="number1">Enter Number 1:</label>
    <input type="number" name="number1" id="number1" value="<?php echo $number1; ?>" required>
    
    <label for="number2">Enter Number 2:</label>
    <input type="number" name="number2" id="number2" value="<?php echo $number2; ?>" required>
    
    <input type="submit" value="Compare">
</form>
<?php
if ($result !== '') {
    echo "<p> <span>$result </span> is the largest number here</p>";
}?>
</body>
</html>
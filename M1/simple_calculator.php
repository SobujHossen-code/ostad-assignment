<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
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
        label, input, select {
            display: block;
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            margin-top:20px;
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 15px;
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
    </style>
</head>
<body>

<?php
$num1 = '';
$num2 = '';
$operation = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'addition':
            $result = $num1 + $num2;
            break;
        case 'subtraction':
            $result = $num1 - $num2;
            break;
        case 'multiplication':
            $result = $num1 * $num2;
            break;
        case 'division':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Cannot divide by zero';
            }
            break;
    }
}
?>

<h1>Simple Calculator</h1>
<form method="post">
    <label for="num1">Enter Number 1:</label>
    <input type="number" name="num1" id="num1" value="<?php echo $num1; ?>" required>
    
    <label for="num2">Enter Number 2:</label>
    <input type="number" name="num2" id="num2" value="<?php echo $num2; ?>" required>
    
    <label for="operation">Select Operation:</label>
    <select name="operation" id="operation">
        <option value="addition" <?php if ($operation === 'addition') echo 'selected'; ?>>Addition</option>
        <option value="subtraction" <?php if ($operation === 'subtraction') echo 'selected'; ?>>Subtraction</option>
        <option value="multiplication" <?php if ($operation === 'multiplication') echo 'selected'; ?>>Multiplication</option>
        <option value="division" <?php if ($operation === 'division') echo 'selected'; ?>>Division</option>
    </select>
    
    <input type="submit" value="Calculate">
</form>

<?php
if ($result !== '') {
    echo "<p>Result: $result</p>";
}?>
</body>
</html>
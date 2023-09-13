<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
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
            padding: 25px;
            border-radius: 5px;
            box-shadow: 10px 15px 25px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        label, select, input {
            display: block;
            margin-bottom: 10px;
        }
        select{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            margin-top: 20px;
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
            color: #7a7a7a
        }
        span{
            color:black
        }
    </style>
</head>
<body>
<?php
$temperature = '';
$converted_temperature = '';
$direction = 'c_to_f';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $temperature = $_POST['temperature'];
    $direction = $_POST['direction'];
    if ($direction === 'c_to_f') {
        $converted_temperature = ($temperature * 9/5) + 32;
    } else {
        $converted_temperature = ($temperature - 32) * 5/9;
    }
}
?>
<h1>Temperature Converter</h1>
<form method="post">
    <label for="temperature">Enter Temperature:</label>
    <input type="text" name="temperature" id="temperature" value="<?php echo $temperature; ?>" required>
    
    <label for="direction">Conversion Direction:</label>
    <select name="direction" id="direction">
        <option value="c_to_f" <?php if ($direction === 'c_to_f') echo 'selected'; ?>>Celsius to Fahrenheit</option>
        <option value="f_to_c" <?php if ($direction === 'f_to_c') echo 'selected'; ?>>Fahrenheit to Celsius</option>
    </select>  
    <input type="submit" value="Convert">
</form>
<h3><?php
if ($converted_temperature !== '') {
    $from_unit = $direction === 'c_to_f' ? 'Celsius' : 'Fahrenheit';
    $to_unit = $direction === 'c_to_f' ? 'Fahrenheit' : 'Celsius';
    echo "<p>$temperature $from_unit is <span>$converted_temperature $to_unit.</span></p>";
}
?></h3>
</body>
</html>
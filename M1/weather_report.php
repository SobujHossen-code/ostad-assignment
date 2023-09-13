<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
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
            background-color: #0056b3;
        }
        p {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
$temperature = '';
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $temperature = $_POST['temperature'];
    if ($temperature <= 5) {
        $message = "It's freezing☃️🥶!";
    } elseif ($temperature <= 20) {
        $message = "It's cool❄️";
    } else {
        $message = "It's warm🔥";
    }
}?>

<h1>Weather Report</h1>
<form method="post">
    <label for="temperature">Enter Temperature (in Celsius):</label>
    <input type="number" name="temperature" id="temperature" value="<?php echo $temperature; ?>" required>
    
    <input type="submit" value="Get Weather Report">
</form>
<?php
if ($message !== '') {
    echo "<h3>$message</h3>";
}?>
</body>
</html>
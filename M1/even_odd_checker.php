<!DOCTYPE html>
<html>
<head>
    <title>Even Odd Checker</title>
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
            width: 500px;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-top:15px;
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
$number = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = $_POST['number'];

    if ($number % 2 === 0) {
        $message = "$number is even.";
    } else {
        $message = "$number is odd.";
    }
}
?>

<h1>Even Odd Checker</h1>
<form method="post">
    <label for="number">Enter a Number:</label>
    <input type="number" name="number" id="number" value="<?php echo $number; ?>" required>
    
    <input type="submit" value="Check">
</form>

<h2> <?php if ($message !== '') {echo "<p>$message</p>";}?> </h2>

</body>
</html>

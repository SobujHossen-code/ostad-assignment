<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
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
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 15px;;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: black;
        }
        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 35%;
        }
        table, th, td {
            border: 1px solid #ccc;

        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f5f5f5;
        }
        p {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
$score1 = '';
$score2 = '';
$score3 = '';
$average = '';
$grade = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score1 = $_POST['score1'];
    $score2 = $_POST['score2'];
    $score3 = $_POST['score3'];

    $average = ($score1 + $score2 + $score3) / 3;

    if ($average >= 90) {
        $grade = 'A';
    } elseif ($average >= 80) {
        $grade = 'B';
    } elseif ($average >= 70) {
        $grade = 'C';
    } elseif ($average >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }
}
?>

<h1>Grade Calculator</h1>
<form method="post">
    <label for="score1">Total Number of Bangla</label>
    <input type="number" name="score1" id="score1" value="<?php echo $score1; ?>" required>
    
    <label for="score2">Total Number of English</label>
    <input type="number" name="score2" id="score2" value="<?php echo $score2; ?>" required>

    <label for="score3">Total Number of Science</label>
    <input type="number" name="score3" id="score3" value="<?php echo $score3; ?>" required>
    
    <input type="submit" value="Calculate Grade">
</form>

<?php
if ($average !== '' && $grade !== '') {
    echo "<table>";
    echo "<tr><th>Average Score</th><th>Letter Grade</th></tr>";
    echo "<tr><td>$average</td><td>$grade</td></tr>";
    echo "</table>";
}
?>

</body>
</html>

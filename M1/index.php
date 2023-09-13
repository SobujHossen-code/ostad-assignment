<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tool Showcase</title>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
    height: 100vh;
    background-image: radial-gradient(circle at center center, transparent,rgb(255,255,255)),repeating-linear-gradient(135deg, rgb(255,255,255) 0px, rgb(255,255,255) 12px,transparent 12px, transparent 19px,rgb(255,255,255) 19px, rgb(255,255,255) 24px,transparent 24px, transparent 28px),repeating-linear-gradient(45deg, rgb(245,245,245) 0px, rgb(245,245,245) 7px,transparent 7px, transparent 14px),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255));
    }

    .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    }

    .card {
    background-color: #fff;
    border-radius: 5px;
    padding: 20px;
    margin: 10px;
    width: 300px;
    text-align: center;
    box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
    }

    .card img {
    max-width: 35%;
    height: auto;
    }
    h1{
        text-align: center;
        font-family:poppins;
        font-size:40px;
    }

    h2 {
    font-size: 20px;
    margin: 10px 0;
    font-family:roboto;
    }

    p {
    font-size: 12px;
    padding: 5px 20px;
    font-family:roboto;
    }

    .btn {
    width:40%;
    display: inline-block;
    padding: 10px 20px;
    background-color: #007BFF;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 10px;
    font-family:roboto;
    }

    .btn:hover {
    background-color: black;
    }

</style>
</head>
<body>
    <h1>Ostad Assaignment | Module-1</h1>    
    <p style="text-align:center;margin-top:-20px">Submited by: Jannatunnaim Sobuj</p>        
    

    <div class="container">
        <div class="card">
            <img src="img/parsonal.png" alt="Tool 1">
            <h2>Personal Information Page</h2>
            <p>Create a PHP file named personal_info.php that displays your personal information using variables and the echo statement. Include your name, age, country, and a brief introduction.</p>
            <a href="tool1-link.html" class="btn">Try it</a>
        </div>
        <div class="card">
            <img src="img/temperature.png" alt="Tool 1">
            <h2>Temperature Converter</h2>
            <p>Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit. Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.</p>
            <a href="tool1-link.html" class="btn">Try it</a>
        </div>
        <div class="card">
            <img src="img/exam.png" alt="Tool 1">
            <h2>Grade Calculator</h2>
            <p>Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).</p>
            <a href="tool1-link.html" class="btn">Try it</a>
        </div>
        <div class="card">
            <img src="img/even odd.png" alt="Tool 1">
            <h2>Even or Odd Checker</h2>
            <p>Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd.</p>
            <a href="tool1-link.html" class="btn">Try it</a>
        </div>
        <div class="card">
            <img src="img/weather-app.png" alt="Tool 1">
            <h2>Weather Report</h2>
            <p>Create a PHP script named weather_report.php that provides weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."</p>
            <a href="tool1-link.html" class="btn">Try it</a>
        </div>
        <div class="card">
            <img src="img/scale.png" alt="Tool 1">
            <h2>Comparison Tool</h2>
            <p>Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.</p>
            <a href="tool1-link.html" class="btn">Try it</a>
        </div>
        <div class="card">
            <img src="img/calculator.png" alt="Tool 1">
            <h2>Simple Calculator</h2>
            <p>Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation.</p>
            <a href="tool1-link.html" class="btn">Try it</a>
        </div>
        <!-- Repeat the above card structure for the other tools (6 more times) -->
    </div>
</body>
</html>

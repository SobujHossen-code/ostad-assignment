<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calculateAverageGrades($studentGrades) {
        foreach ($studentGrades as $student => $grades) {
            $totalGrades = array_sum($grades);
            $numSubjects = count($grades);
            $averageGrade = $totalGrades / $numSubjects;

            echo "Student $student: Average Grade = $averageGrade\n";
        }
    }
    $studentGrades = array(
        'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
        'Student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
        'Student3' => array('Math' => 75, 'English' => 80, 'Science' => 88)
    );
    calculateAverageGrades($studentGrades);
    ?>

</body>
</html>
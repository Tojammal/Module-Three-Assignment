<?php

$studentGrades = [
    ["Math" => 96, "English" => 80, "Science" => 90],
    ["Math" => 98, "English" => 75, "Science" => 88],
    ["Math" => 90, "English" => 90, "Science" => 92],
];

function averageGrades($grades) {
    foreach ($grades as $studentName => $subjects) {
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;

        $gradeValue = " ";
        if ($average >= 80) {
            $gradeValue = "A+";
        } elseif ($average >= 70) {
            $gradeValue = "A";
        } elseif ($average >= 60) {
            $gradeValue = "A-";
        } elseif ($average >= 50) {
            $gradeValue = "B";
        } elseif ($average >= 40) {
            $gradeValue = "C";
        } elseif ($average >= 33) {
            $gradeValue = "D";
        } else {
            $gradeValue = "F";
        }

        echo "Average grade for $studentName: $average (Grade: $gradeValue)\n";
    }
}

averageGrades($studentGrades);
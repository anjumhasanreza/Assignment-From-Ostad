<?php


/* 

Create a multidimensional array called $studentGrades 
to store the grades of three students. 

Each student has grades for three subjects: Math, English, and Science. 
Write a PHP function which takes "$studentGrades" as an argument 
to calculate and print the average grade for each student.

*/


echo PHP_EOL;
echo PHP_EOL;




$studentGrades = [
    'Anjum' => ['Math' => 5, 'English' => 9, 'Science' => 8],
    'Hasan' => ['Math' => 90, 'English' => 88, 'Science' => 94],
    'Reza' => ['Math' => "", 'English' => 101, 'Science' => -5],
];

function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $key => $value) {
        $invalidMarks = [];
        foreach ($value as $subject => $marks) {
            if ($marks < 0 || $marks > 100) {
                $invalidMarks[] = "$subject: $marks";
            }
        }


        if (!empty($invalidMarks)) {
            echo "==========$key==========\n";

            echo "Check your Marks\n\n";

            echo "Wrong inputs are following: \n";

            echo implode("\n", $invalidMarks) . "\n\n";

            continue;
        }

        $average = number_format(array_sum($value) / count($value), 2);

        if ($average <= 100 && $average >= 80) {
            $grade = "A+";
        } elseif ($average < 80 && $average >= 70) {
            $grade = "A";
        } elseif ($average < 70 && $average >= 60) {
            $grade = "A-";
        } elseif ($average < 60 && $average >= 50) {
            $grade = "B";
        } elseif ($average < 50 && $average >= 40) {
            $grade = "C";
        } elseif ($average < 40 && $average >= 33) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        echo "==========$key==========\n";

        echo "Average Marks: $average\n";

        echo "Grade: $grade\n\n";
    }
}


calculateAverageGrades($studentGrades);


echo PHP_EOL;
echo PHP_EOL;

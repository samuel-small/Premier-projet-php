<?php
// Generate an array with 5 students and grades between 0 and 20.
// Calculate the average for each student.
// Display whether they passed (average >= 10) or failed.

// List of students
$students = ["Sophia", "Batman", "Goku", "Reina", "TotallySpies"];

// Array to store the grades
$grades = [];
$averages = [];

// Generate grades for each student
foreach ($students as $student) {
    $num_exams = rand(3, 8); // Each student has between 3 and 8 exams
    $sum = 0;

    for ($i = 0; $i < $num_exams; $i++) {
        $grade = random_int(0, 20); // Generate a random grade
        $grades[$student][] = $grade;  // Store the grade
        $sum += $grade;                // Add the grade to the sum
    }

    // Calculate the average
    $average = $sum / $num_exams;
    $averages[$student] = round($average, 2); // Store the rounded average
}

// Display results
echo "<pre>";
print_r($grades); // Display the grades for each student
print_r($averages); // Display the averages for each student
echo "</pre>";

?>
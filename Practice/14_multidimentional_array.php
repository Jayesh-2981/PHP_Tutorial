<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Dimensional Array</title>
</head>

<body>
    <?php
    // Display a welcome message
    echo "Welcome to Multi-Dimensional Array<br>";
    echo "<br>";


    // Creating a two-dimensional array
    $multiDimentionalArray = array(
        array(2, 5, 7, 8), // First row of the array
        array(1, 2, 3, 1), // Second row of the array
        array(4, 5, 0, 1)  // Third row of the array
    );

    // Printing the contents of the 2-dimensional array using var_dump
    for ($i = 0; $i < count($multiDimentionalArray); $i++) {
        echo var_dump($multiDimentionalArray[$i]); // Display the structure and contents of each row
        echo "<br>"; // Line break for better readability
    }

    echo "<br>";

    // Alternative method to print each element in the array
    for ($i = 0; $i < count($multiDimentionalArray); $i++) {
        for ($j = 0; $j < count($multiDimentionalArray[$i]); $j++) {
            echo $multiDimentionalArray[$i][$j]; // Print each element
            echo " "; // Space between elements
        }
        echo "<br>"; // Line break after each row
    }

    echo "<br>";

    // Printing the contents of the 2-dimensional array in a readable format
    echo "Array Contents:<br>";
    foreach ($multiDimentionalArray as $row) {
        echo implode(" ", $row); // Join elements of the row with a space and print
        echo "<br>"; // Line break after each row
    }

    echo "<br>";

    // Printing the array in a table format for better visualization
    echo "<table border='1'>"; // Start of the table with a border
    foreach ($multiDimentionalArray as $row) {
        echo "<tr>"; // Start a new table row
        foreach ($row as $value) {
            echo "<td>$value</td>"; // Print each value in a table cell
        }
        echo "</tr>"; // End of the table row
    }
    echo "</table>"; // End of the table

    echo "<br>";

    // Creating a three-dimensional array
    $students = [
        'Student1' => [
            'Math' => [90, 85, 88], // Scores in Math
            'Science' => [92, 80, 85], // Scores in Science
            'English' => [88, 90, 92] // Scores in English
        ],
        'Student2' => [
            'Math' => [78, 82, 80], // Scores in Math
            'Science' => [85, 87, 90], // Scores in Science
            'English' => [80, 75, 78] // Scores in English
        ],
        'Student3' => [
            'Math' => [95, 92, 94], // Scores in Math
            'Science' => [90, 88, 91], // Scores in Science
            'English' => [85, 87, 89] // Scores in English
        ]
    ];

    // Accessing and displaying scores for each student
    foreach ($students as $student => $subjects) {
        echo "$student Scores: <br>";
        foreach ($subjects as $subject => $scores) {
            echo "$subject: " . implode(", ", $scores) . "<br>"; // Display scores for each subject
        }
        echo "<br>"; // New line for better readability
    }
    ?>
</body>

</html>
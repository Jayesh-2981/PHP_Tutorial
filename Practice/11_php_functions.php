<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>

<body>
    <?php
    echo "Welcome to functions in PHP <br>";

    // Function to calculate total marks
    function TotalMarks($marksArray)
    {
        $sum = 0; // Initialize sum to 0
        foreach ($marksArray as $value) {
            $sum += $value; // Add each mark to sum
        }
        return $sum; // Return the total sum
    }

    // Function to calculate average marks
    function AvgMarks($marksArray)
    {
        $sum = TotalMarks($marksArray); // Use TotalMarks function to get sum
        $count = count($marksArray); // Get the number of elements in the array
        return $count > 0 ? $sum / $count : 0; // Return average, handle division by zero
    }

    // Arrays for marks
    $jd = [35, 35, 35, 35, 35, 35];
    $Jayesh = [98, 99, 78, 97, 56, 35];

    // Calculate total marks
    $sumMarksJd = TotalMarks($jd);
    $sumMarksJayesh = TotalMarks($Jayesh);

    // Display total marks
    echo "Total marks scored by JD out of 600 are $sumMarksJd <br>";
    echo "Total marks scored by Jayesh out of 600 are $sumMarksJayesh <br>";

    // Calculate average marks
    $avgMarksJd = AvgMarks($jd);
    $avgMarksJayesh = AvgMarks($Jayesh);

    // Display average marks
    echo "Average marks scored by JD are $avgMarksJd <br>";
    echo "Average marks scored by Jayesh are $avgMarksJayesh <br>";

    ?>
</body>

</html>
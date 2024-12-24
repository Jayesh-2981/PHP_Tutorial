<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>

<body>
    <?php
    // Display a heading for the while loop demonstration
    echo "While loops in PHP <br>";

    // Initialize the counter variable to start the loop
    $i = 1;
    echo "Initial value of i is 1 <br>";

    // Start the while loop to iterate as long as $i is less than or equal to 5
    while ($i <= 5) {
        // Output the current value of $i
        echo "The current value of i is ";
        echo $i; // Display the value of $i
        echo "<br>"; // Add a line break for better readability

        // Increment the counter variable by 1 for the next iteration
        $i++;
    }
    ?>
</body>

</html>
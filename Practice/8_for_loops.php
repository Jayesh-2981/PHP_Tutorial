<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loops in php</title>
</head>

<body>
    <?php
    echo "This is for loop in action <br>";

    // Define the loop parameters
    $start = 0;
    $end = 5;

    // Use a for loop to iterate over the range
    for ($index = $start; $index <= $end; $index++) {
        echo "The index is $index <br>";
    }

    echo "For loop has ended <br>";

    // Example of a nested for loop
    echo "Nested for loop example: <br>";
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= 3; $j++) {
            echo "($i, $j) <br>";
        }
    }

    // Example of a for loop with an array
    $colors = array("Red", "Green", "Blue");
    echo "For loop with an array example: <br>";
    for ($i = 0; $i < count($colors); $i++) {
        echo "$colors[$i] <br>";
    }

    // Avoid running into infinite loops
    // for ($i=0; $i < 87; ) {
    // echo $i;
    // }
    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while loop</title>
</head>

<body>

    <?php

    echo "Welcome to do-while loop example <br>";

    // Syntax :- 
    /*
    do {
        some lines of code to be executed here;
        } while (condition)
    */

    $x = 10;
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 10);

    //* Explanation: The loop will run at least once, and the condition is checked after the first iteration.
    //* In this case, the loop will run until $x is less than or equal to 10.
    ?>

</body>

</html>
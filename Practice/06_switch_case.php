<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case Conditionals</title>
</head>

<body>
    <?php

    // Define a variable to hold the age
    $age = 56;

    // Start a switch statement to evaluate the value of $age
    switch ($age) {
            // Case for when age is 12
        case 12:
            echo "You are 12 years old <br>"; // Output message for age 12
            break; // Exit the switch statement

            // Case for when age is 45
        case 45:
            echo "You are 45 years old <br>"; // Output message for age 45
            break; // Exit the switch statement

            // Case for when age is 56
        case 56:
            echo "You are 56 years old boy <br>"; // Output message for age 56
            break; // Exit the switch statement

            // Default case if none of the above cases match
        default:
            echo "Your age is weird <br>"; // Output message for any other age
            break; // Exit the switch statement
    }

    ?>
</body>

</html>
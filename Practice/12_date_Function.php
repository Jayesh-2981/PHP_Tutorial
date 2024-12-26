<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Functions</title>
</head>

<body>
    <?php
    /**
     * Display the current date and time in a formatted manner.
     * This script sets the timezone, retrieves the current date and time,
     * and displays it in various formats.
     */

    // Set the timezone to ensure accurate date and time representation
    date_default_timezone_set('America/New_York');

    // Create a DateTime object for the current date and time
    $currentDateTime = new DateTime();

    // Function to display a welcome message
    function displayWelcomeMessage()
    {
        echo "Welcome to the world of dates<br>";
    }

    // Function to display the current date and time in a formatted manner
    function displayCurrentDateTime($dateTime)
    {
        // Display today's date in a specific format
        echo "Today's date is " . $dateTime->format("dS F Y, g:i A") . "<br>";

        // Display the current date and time in an alternative format
        echo $dateTime->format("l jS \of F Y h:i:s A") . "<br>";
    }

    // Function to display the copyright year
    function displayCopyright($year)
    {
        echo "Copyright $year | All rights reserved <br>";
    }

    // Execute functions to display information
    displayWelcomeMessage();
    displayCurrentDateTime($currentDateTime);

    // Get the current year for copyright display
    $year = $currentDateTime->format("Y");
    displayCopyright($year);
    ?>
</body>

</html>
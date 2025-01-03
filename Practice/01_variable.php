<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>

<body>
    <div class="container">
        <h2>Rules for Creating a Variable</h2>
        <ul>
            <li>Starts with a $ sign</li>
            <li>Cannot start with a number</li>
            <li>Must start with a letter or an underscore</li>
            <li>Can only contain alphanumeric characters and underscores</li>
            <li>Variables in PHP are case sensitive. ($Jayesh, $JAyesh, $JAYESH are different)</li>
        </ul>
    </div>

    <?php
    // Defining variables
    $name = "Jayesh"; // Variable to store the name
    $namE = "Capital JAYESH"; // Variable with a different case
    $income = 10000.00; // Variable to store income

    // Outputting the values of the variables
    echo "My name is $name and my income is $income rs <br>";
    echo "$namE is a family man <br>";
    echo "$name is a real gangsta <br><br>";
    ?>

</body>

</html>
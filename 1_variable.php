<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2>Rules for Creating a varriable</h2>
        <ul>
            <li>Starts with a $ sign</li>
            <li>Cannot starts with a number</li>
            <li>Must starts with a letter or an underscore</li>
            <li>Can only contain alpha numeric characters and underscores</li>
            <li>Variables in php are case sensitive. ($Jayesh $JAyesh $JAYESH are different)</li>
        </ul>
    </div>

    <?php
    // echo "This is php variable";
    // Variables are container for storing the data
    // Starts with $
    $name = "Jayesh";
    $namE = "Capital JAYESH";
    // Varibales are case sensitive
    $income = 10000.00;

    echo "My name is $name and my income is $income rs <br>";
    echo "$namE is a family man <br>";
    echo "$name is a real gangsta <br><br>";
    ?>

</body>

</html>
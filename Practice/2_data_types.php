<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DataTypes</title>
</head>

<body>

    <h2>PHP Data Types</h2>
    <ol>
        <li>String</li>
        <li>Integer</li>
        <li>Float</li>
        <li>Boolean</li>
        <li>Object</li>
        <li>Array</li>
        <li>NULL</li>
        <li>Resource</li>
    </ol>

    <?php
    // String: Sequence of characters
    $name = "Jayesh";
    $friend = 'Aditya';
    echo "$name's friend is $friend";   // Output: Jayesh's friend is Aditya
    echo "<br>";

    // Integer: Non-decimal number
    $income = 455;
    $debts = -655;
    echo "<br>";
    echo $income;   // Output: 455
    echo "<br>";
    echo $debts;    // Output: -655
    echo "<br>";

    // Float: Decimal point number
    $income = 344.5;
    $debts = -45.5;
    echo "<br>";
    echo $income;   // Output: 344.5
    echo "<br>";
    echo $debts;    // Output: -45.5
    echo "<br>";

    // Boolean: Can be either true or false
    $x = true;
    $is_friend = false;
    echo "<br>";
    echo var_dump($x);  // Output: bool(true)
    echo "<br>";
    echo var_dump($is_friend);  // Output: bool(false)
    echo "<br>";

    // Object: Instances of classes
    // Example: Employee is a class, and Jayesh can be one object of that class.

    // Array: Used to store multiple values in a single variable
    $friends = array("rohan", "shubham", "skillf", "Jayesh Jadhav");
    echo "<br>";
    echo var_dump($friends);    // Output: array with 4 elements
    echo "<br>";
    echo $friends[0];   // Output: rohan
    echo "<br>";
    echo $friends[1];   // Output: shubham
    echo "<br>";
    echo $friends[2];   // Output: skillf
    echo "<br>";
    echo $friends[3];   // Output: Jayesh Jadhav
    echo "<br>";
    // Uncommenting the next line will cause a warning due to undefined index
    // echo $friends[4];  // Warning: Undefined array key 4

    // NULL: Represents a variable with no value
    echo "<br>";
    $name = NULL;
    echo var_dump($name); // Output: NULL
    ?>
</body>

</html>
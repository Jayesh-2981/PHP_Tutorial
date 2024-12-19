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
    // String : Sequece of Characters
    $name = "Jayesh";
    $friend = 'Aditya';
    echo "$name's friend is $friend";   // Jayesh's friend is Aditya
    echo "<br>";

    // Integer : Non decimal number
    $income = 455;
    $debts = -655;
    echo "<br>";
    echo $income;   // 455
    echo "<br>";
    echo $debts;    //-655
    echo "<br>";

    // Float : Decimal point number
    $income = 344.5;
    $debts = -45.5;
    echo "<br>";
    echo $income;   // 344.5
    echo "<br>";
    echo $debts;    // -45.5
    echo "<br>";

    // Boolean : Can be either true or false
    $x = true;
    $is_friend = false;
    echo "<br>";
    echo var_dump($x);  //bool(true)

    echo "<br>";
    echo var_dump($is_friend);  // bool(false)
    echo "<br>";

    // Object : Instaces of classes
    // Employee is a class -----> Jayesh can be one object

    // Array : used to store multiple values in a single variable
    $friends = array("rohan", "shubham", "skillf", "Jayesh Jadhav");
    echo "<br>";
    echo var_dump($friends);    // array(4) { [0]=> string(5) "rohan" [1]=> string(7) "shubham" [2]=> string(6) "skillf" [3]=> string(13) "Jayesh Jadhav" }
    echo "<br>";
    echo $friends[0];   // rohan
    echo "<br>";
    echo $friends[1];   // shubham
    echo "<br>";
    echo $friends[2];   // skillf
    echo "<br>";
    echo $friends[3];   // Jayesh Jadhav
    echo "<br>";
    // echo $friends[4];  //  Warning: Undefined array key 4 in C:\xampp\htdocs\php\2_data_types.php on line 65

    // NULL
    echo "<br>";
    $name = NULL;
    echo var_dump($name);
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop in PHP</title>
</head>

<body>
    <?php
    // Introduction to for each loop
    echo "<h1>Introduction to For Each Loop</h1>";

    // Define an array of fruits
    $fruits = array("apple", "banana", "mango", "kiwi");

    // Printing elements of the array using for each loop
    echo "<h2>Printing Elements of Array Using For Each Loop</h2>";
    foreach ($fruits as $fruit) {
        echo "$fruit <br>";
    }

    // Printing key-value pairs of the array using for each loop
    echo "<h2>Printing Key-Value Pairs of Array Using For Each Loop</h2>";
    foreach ($fruits as $key => $fruit) {
        echo "Key: $key, Value: $fruit <br>";
    }

    // Printing elements of a multidimensional array using for each loop
    echo "<h2>Printing Elements of Multidimensional Array Using For Each Loop</h2>";
    $multidimensionalArray = array(
        "fruit1" => array("name" => "apple", "color" => "red"),
        "fruit2" => array("name" => "banana", "color" => "yellow"),
        "fruit3" => array("name" => "mango", "color" => "yellow")
    );
    foreach ($multidimensionalArray as $fruit) {
        echo "Name: " . $fruit["name"] . ", Color: " . $fruit["color"] . "<br>";
    }
    ?>
</body>

</html>
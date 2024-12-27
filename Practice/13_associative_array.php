<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>
    <?php
    // Displaying the title of the page
    echo "Associative Array <br>";

    // Creating an indexed array (also known as a numeric array)
    $arr = array("this", "that", "there");

    // Accessing and displaying elements of the indexed array using their index
    echo $arr[0] . "<br>"; // Output: this
    echo $arr[1] . "<br>"; // Output: that
    echo $arr[2] . "<br>"; // Output: there

    //~ Associative Arrays
    // Creating an associative array where keys are strings and values are colors
    $favoriteColor = [
        'jayesh' => 'green',  // Key: 'jayesh', Value: 'green'
        'pooja' => 'white',    // Key: 'pooja', Value: 'white'
        'poonam' => 'pink',     // Key: 'poonam', Value: 'pink'
        4 => 'black'           // Key: 4, Value: 'black' (numeric key)
    ];

    // Accessing and displaying values from the associative array using their keys
    echo $favoriteColor['jayesh'] . "<br>"; // Output: green
    echo $favoriteColor['pooja'] . "<br>";  // Output: white
    echo $favoriteColor['poonam'] . "<br>"; // Output: pink
    echo $favoriteColor[4] . "<br>";        // Output: black

    // Looping through the associative array to display each key-value pair
    foreach ($favoriteColor as $key => $value) {
        echo "favorite color of $key is $value <br>"; // Output: favorite color of [key] is [value]
    }

    ?>
</body>

</html>
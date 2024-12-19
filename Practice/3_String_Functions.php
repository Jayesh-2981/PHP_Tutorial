<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>

<body>
    <?php

    // Define the string
    $name = "Jayesh is an Computer Engineer";

    // Display the string
    echo "Original String: $name";
    echo "<br>";

    // 1) strlen()    => Gives length of the string 
    echo "The length of the string is: " . strlen($name);
    echo "<br>";

    // 2) str_word_count() =>  Gives count of words present in string
    echo "Number of words in the string: " . str_word_count($name);
    echo "<br>";

    // 3) strrev() =>  Reverse the string
    echo "Reversed String: " . strrev($name);
    echo "<br>";

    // 4) strpos() => returns the position of the character 
    echo "Position of 'is' in the string: " . strpos($name, "is");
    echo "<br>";

    // 5) str_replace()    => replace the words in the string 
    echo "String after replacing 'Jayesh' with 'JD': " . str_replace("Jayesh", "JD", $name);
    echo "<br>";

    // 6) str_repeat() => Repeat the string 
    echo "Repeated String: " . str_repeat($name, 4);
    echo "<br>";

    // 7) rtrim()  => removes the white spaces at the end of the string
    echo "String after removing trailing whitespaces: <pre>" . rtrim("    My name is Jayesh   ") . "</pre>";

    // 8) ltrim()  => removes the white spaces at the start of the string
    echo "String after removing leading whitespaces: <pre>" . ltrim("    My name is Jayesh   ") . "</pre>";
    echo "<br>";

    // 9) trim()  => removes the white spaces at the start and end of the string
    echo "String after removing leading and trailing whitespaces: <pre>" . trim("    My name is Jayesh   ") . "</pre>";
    echo "<br>";

    // 10) explode() => splits the string into an array
    echo "Array of words: ";
    print_r(explode(" ", $name));
    echo "<br>";

    // 11) implode() => joins the array into a string
    echo "String from array: " . implode(" ", explode(" ", $name));
    echo "<br>";

    // 12) strtolower() => converts the string to lowercase
    echo "String in lowercase: " . strtolower($name);
    echo "<br>";

    // 13) strtoupper() => converts the string to uppercase
    echo "String in uppercase: " . strtoupper($name);
    echo "<br>";

    // 14) ucfirst() => converts the first character of the string to uppercase
    echo "String with first character uppercase: " . ucfirst($name);
    echo "<br>";

    // 15) ucwords() => converts the first character of each word to uppercase
    echo "String with first character of each word uppercase: " . ucwords($name);
    echo "<br>";

    ?>
</body>

</html>
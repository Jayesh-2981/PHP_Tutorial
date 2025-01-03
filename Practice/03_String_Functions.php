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
    $name = "Jayesh is an Computer Engineer"; // Initial string containing a name and profession

    // Display the original string
    echo "Original String: $name";
    echo "<br>";

    // 1) strlen() => Gives length of the string 
    echo "The length of the string is: " . strlen($name); // Display the length of the string
    echo "<br>";

    // 2) str_word_count() => Gives count of words present in string
    echo "Number of words in the string: " . str_word_count($name); // Count and display the number of words
    echo "<br>";

    // 3) strrev() => Reverse the string
    echo "Reversed String: " . strrev($name); // Reverse the string and display it
    echo "<br>";

    // 4) strpos() => returns the position of the character 
    echo "Position of 'is' in the string: " . strpos($name, "is"); // Find and display the position of the substring 'is'
    echo "<br>";

    // 5) str_replace() => replace the words in the string 
    echo "String after replacing 'Jayesh' with 'JD': " . str_replace("Jayesh", "JD", $name); // Replace 'Jayesh' with 'JD' and display the result
    echo "<br>";

    // 6) str_repeat() => Repeat the string 
    echo "Repeated String: " . str_repeat($name, 4); // Repeat the string 4 times and display it
    echo "<br>";

    // 7) rtrim() => removes the white spaces at the end of the string
    echo "String after removing trailing whitespaces: <pre>" . rtrim("    My name is Jayesh   ") . "</pre>"; // Remove trailing spaces and display the result
    echo "<br>";

    // 8) ltrim() => removes the white spaces at the start of the string
    echo "String after removing leading whitespaces: <pre>" . ltrim("    My name is Jayesh   ") . "</pre>"; // Remove leading spaces and display the result
    echo "<br>";

    // 9) trim() => removes the white spaces at the start and end of the string
    echo "String after removing leading and trailing whitespaces: <pre>" . trim("    My name is Jayesh   ") . "</pre>"; // Remove both leading and trailing spaces and display the result
    echo "<br>";

    // 10) explode() => splits the string into an array
    echo "Array of words: ";
    print_r(explode(" ", $name)); // Split the string into an array of words and display it
    echo "<br>";

    // 11) implode() => joins the array into a string
    echo "String from array: " . implode(" ", explode(" ", $name)); // Join the array back into a string and display it
    echo "<br>";

    // 12) strtolower() => converts the string to lowercase
    echo "String in lowercase: " . strtolower($name); // Convert the string to lowercase and display it
    echo "<br>";

    // 13) strtoupper() => converts the string to uppercase
    echo "String in uppercase: " . strtoupper($name); // Convert the string to uppercase and display it
    echo "<br>";

    // 14) ucfirst() => converts the first character of the string to uppercase
    echo "String with first character uppercase: " . ucfirst($name); // Capitalize the first character of the string and display it
    echo "<br>";

    // 15) ucwords() => converts the first character of each word to uppercase
    echo "String with first character of each word uppercase: " . ucwords($name); // Capitalize the first character of each word and display it
    echo "<br>";

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Understanding Local and Global Scope in PHP</title>
</head>

<body>
    <?php
    // Define global variables
    $globalA = 98; // Global variable A
    $globalB = 9;  // Global variable B

    // Function to demonstrate local variable scope
    function demonstrateLocalScope()
    {
        $localA = 97; // Local variable A
        echo "<br>Value of local variable A is: $localA"; // Output local variable
    }

    // Function to demonstrate global variable scope
    function demonstrateGlobalScope()
    {
        global $globalA, $globalB; // Access global variables

        // Modify global variables
        $globalA = 100;
        $globalB = 1000;

        // Output modified global variables
        echo "<br>The value of global variable A is now: $globalA and global variable B is now: $globalB";
    }

    // Display initial values of global variables
    echo "<h1><center>Understanding Local and Global Scope in PHP</center></h1>";
    echo "<br>Initial value of global variable A is: $globalA";
    echo "<br>Initial value of global variable B is: $globalB";

    // Call functions to demonstrate scope
    demonstrateLocalScope(); // Call to demonstrate local scope
    demonstrateGlobalScope(); // Call to demonstrate global scope

    // Display modified values of global variables after function calls
    echo "<br>After function calls, the modified value of global variable A is: $globalA and B is: $globalB";

    // Display all global variables using the $GLOBALS superglobal array
    echo "<br><strong>Global Variables:</strong><br>";
    echo var_dump($GLOBALS); // Output all global variables
    echo "<br>Current value of global variable A is: " . $GLOBALS["globalA"]; // Output specific global variable A
    echo "<br>Current value of global variable B is: " . $GLOBALS["globalB"]; // Output specific global variable B
    ?>
</body>

</html>
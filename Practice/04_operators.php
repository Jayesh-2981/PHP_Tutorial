<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //! Operators in PHP
    /*
    This section demonstrates different types of operators in PHP:
    1. Arithmetic Operators
    2. Assignment Operators
    3. Comparison Operators
    4. Logical Operators
    */

    //~ 1. Arithmetic Operators
    // Initialize two variables for arithmetic operations
    $a = 45;
    $b = 8;

    echo "Arithmetic Operations:<br>";
    // Perform and display various arithmetic operations
    echo "a + b = " . ($a + $b) . "<br>"; // Addition
    echo "a - b = " . ($a - $b) . "<br>"; // Subtraction
    echo "a * b = " . ($a * $b) . "<br>"; // Multiplication
    echo "a / b = " . ($a / $b) . "<br>"; // Division
    echo "a % b = " . ($a % $b) . "<br>"; // Modulus (remainder)
    echo "a ** b = " . ($a ** $b) . "<br><br>"; // Exponentiation

    //~ 2. Assignment Operators
    // Assign the value of $a to $x
    $x = $a;
    echo "Value of x is " . $x . "<br>";

    // Demonstrate various assignment operations
    $a += 6; // Equivalent to $a = $a + 6
    echo "a += 6 is " . $a . "<br>";

    $a -= 6; // Equivalent to $a = $a - 6
    echo "a -= 6 is " . $a . "<br>";

    $a *= 6; // Equivalent to $a = $a * 6
    echo "a *= 6 is " . $a . "<br>";

    $a /= 6; // Equivalent to $a = $a / 6
    echo "a /= 6 is " . $a . "<br>";

    $a %= 6; // Equivalent to $a = $a % 6
    echo "a %= 6 is " . $a . "<br><br>";

    //~ 3. Comparison Operators
    // Initialize two variables for comparison operations
    $x = 7;
    $y = 9;

    echo "Comparison Operations:<br>";
    // Perform and display various comparison operations
    echo "x == y, the result is ";
    echo var_dump($x == $y); // Equal to
    echo "<br>";

    echo "x > y, the result is ";
    echo var_dump($x > $y); // Greater than
    echo "<br>";

    echo "x < y, the result is ";
    echo var_dump($x < $y); // Less than
    echo "<br>";

    echo "x <> y, the result is ";  // <> => Not equals to
    echo var_dump($x <> $y);
    echo "<br>";

    echo "x >= y, the result is ";
    echo var_dump($x >= $y); // Greater than or equal to
    echo "<br>";

    echo "x <= y, the result is ";
    echo var_dump($x <= $y); // Less than or equal to
    echo "<br><br>";

    //~ 4. Logical Operators
    // Initialize two boolean variables for logical operations
    $z = true;
    $w = false;

    echo "Logical Operations:<br>";
    // Perform and display various logical operations
    echo "z && w, the result is ";
    echo var_dump($z && $w); // Logical AND
    echo "<br>";

    echo "z || w, the result is ";
    echo var_dump($z || $w); // Logical OR
    echo "<br>";

    echo "!z, the result is ";
    echo var_dump(!$z); // Logical NOT
    echo "<br>";
    ?>

</body>

</html>
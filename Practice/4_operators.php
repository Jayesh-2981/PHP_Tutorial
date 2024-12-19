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
    1. Arithmetic Operators
    2. Assignment Operators
    3. Comparison Operators
    4. Logical Operators
    */

    //~ 1. Arithmetic Operators
    $a = 45;
    $b = 8;

    echo "Arithmetic Operations:<br>";
    echo "a + b = " . ($a + $b) . "<br>";
    echo "a - b = " . ($a - $b) . "<br>";
    echo "a * b = " . ($a * $b) . "<br>";
    echo "a / b = " . ($a / $b) . "<br>";
    echo "a % b = " . ($a % $b) . "<br>";
    echo "a ** b = " . ($a ** $b) . "<br><br>";

    //~ 2. Assignment Operators
    $x = $a;
    echo "Value of x is " . $x . "<br>";

    $a += 6;
    echo "a += 6 is " . $a . "<br>";

    $a -= 6;
    echo "a -= 6 is " . $a . "<br>";

    $a *= 6;
    echo "a *= 6 is " . $a . "<br>";

    $a /= 6;
    echo "a /= 6 is " . $a . "<br>";

    $a %= 6;
    echo "a %= 6 is " . $a . "<br><br>";

    //~ 3. Comparison Operators
    $x = 7;
    $y = 9;

    echo "Comparison Operations:<br>";
    echo "x == y, the result is ";
    echo var_dump($x == $y);
    echo "<br>";

    echo "x > y, the result is ";
    echo var_dump($x > $y);
    echo "<br>";

    echo "x < y, the result is ";
    echo var_dump($x < $y);
    echo "<br>";

    echo "x <> y, the result is ";  // <> => Not equals to
    echo var_dump($x <> $y);
    echo "<br>";

    echo "x >= y, the result is ";
    echo var_dump($x >= $y);
    echo "<br>";

    echo "x <= y, the result is ";
    echo var_dump($x <= $y);
    echo "<br><br>";

    //~ 4. Logical Operators
    $z = true;
    $w = false;

    echo "Logical Operations:<br>";
    echo "z && w, the result is ";
    echo var_dump($z && $w);
    echo "<br>";

    echo "z || w, the result is ";
    echo var_dump($z || $w);
    echo "<br>";

    echo "!z, the result is ";
    echo var_dump(!$z);
    echo "<br>";
    ?>

</body>

</html>
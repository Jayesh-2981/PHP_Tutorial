<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Conditionals</title>
</head>

<body>
    <?php
    $a = 665;
    $b = 9;
    if ($a > 78) {
        echo "a is greater than 78";
    } else {
        echo "a is not greater than 78";
    }

    echo "<br>";

    // If else ladder
    $age = 54;
    if ($age > 18) {
        echo "You can drink water with chai and alcohol";
    } elseif ($age > 13) {
        echo "You can drink chai only with water. No alcohol for you";
    } else {
        echo "You can drink water only";
    }

    echo "<br>";

    if ($age > 18) {
        echo "You can drink water with chai and alcohol<br>";
    }
    if ($age > 13) {
        echo "You can drink chai only with water. No alcohol for you<br>";
    } else {
        echo "You can drink water only<br>";
    }

    // Quick quiz
    // 1. Create an if else ladder using more than one elseif
    // 2. Write a program to allow a driver to drive only when his age is greater than or equal to 25
    // and less than or equal to 65

    // Solution to quick quiz
    $driverAge = 30;
    if ($driverAge >= 25 && $driverAge <= 65) {
        echo "You are eligible to drive.<br>";
    } elseif ($driverAge < 25) {
        echo "You are not eligible to drive. You are too young.<br>";
    } else {
        echo "You are not eligible to drive. You are too old.<br>";
    }

    // Improved if else ladder
    $personAge = 20;
    if ($personAge > 18) {
        echo "You are an adult.<br>";
    } elseif ($personAge > 13) {
        echo "You are a teenager.<br>";
    } elseif ($personAge > 6) {
        echo "You are a kid.<br>";
    } else {
        echo "You are a toddler.<br>";
    }
    ?>
</body>

</html>
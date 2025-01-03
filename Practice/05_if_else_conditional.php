<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Conditionals</title>
</head>

<body>
    <?php
    // Initialize variables
    $a = 665;
    $b = 9;

    // Check if $a is greater than 78
    if ($a > 78) {
        echo "a is greater than 78"; // Output if condition is true
    } else {
        echo "a is not greater than 78"; // Output if condition is false
    }

    echo "<br>"; // Line break for better readability

    // If else ladder to determine drinking eligibility based on age
    $age = 54;
    if ($age > 18) {
        echo "You can drink water with chai and alcohol"; // Output for adults
    } elseif ($age > 13) {
        echo "You can drink chai only with water. No alcohol for you"; // Output for teenagers
    } else {
        echo "You can drink water only"; // Output for children
    }

    echo "<br>"; // Line break for better readability

    // Alternative way to check age for drinking eligibility
    if ($age > 18) {
        echo "You can drink water with chai and alcohol<br>"; // Output for adults
    }
    if ($age > 13) {
        echo "You can drink chai only with water. No alcohol for you<br>"; // Output for teenagers
    } else {
        echo "You can drink water only<br>"; // Output for children
    }

    // Quick quiz section
    // 1. Create an if else ladder using more than one elseif
    // 2. Write a program to allow a driver to drive only when his age is greater than or equal to 25
    // and less than or equal to 65

    // Solution to quick quiz: Check if the driver is eligible to drive based on age
    $driverAge = 30;
    if ($driverAge >= 25 && $driverAge <= 65) {
        echo "You are eligible to drive.<br>"; // Output if age is within the eligible range
    } elseif ($driverAge < 25) {
        echo "You are not eligible to drive. You are too young.<br>"; // Output if too young
    } else {
        echo "You are not eligible to drive. You are too old.<br>"; // Output if too old
    }

    // Improved if else ladder to categorize person based on age
    $personAge = 20;
    if ($personAge > 18) {
        echo "You are an adult.<br>"; // Output for adults
    } elseif ($personAge > 13) {
        echo "You are a teenager.<br>"; // Output for teenagers
    } elseif ($personAge > 6) {
        echo "You are a kid.<br>"; // Output for kids
    } else {
        echo "You are a toddler.<br>"; // Output for toddlers
    }
    ?>
</body>

</html>
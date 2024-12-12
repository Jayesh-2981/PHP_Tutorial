<?php

/* php data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
8. Resource
*/

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

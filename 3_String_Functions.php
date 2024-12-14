<?php

$name = "Jayesh is an Computer Engineer";
echo $name;
echo "<br>";

// 1) strlen()    => Gives length of the string 
echo "The length of " . "my name is " . strlen($name);
echo "<br>";

// 2) str_word_count() =>  Gives count of words present in string
echo str_word_count($name);
echo "<br>";

// 3) strrev() =>  Reverse the string
echo strrev($name);
echo "<br>";

// 4) strpos() => returns the position of the character 
echo strpos($name, "is");
echo "<br>";

// 5) str_replace()    => replace the words in the string 
echo str_replace("Jayesh", "JD", $name);
echo "<br>";

// 6) str_repeat() => Repeat the string 
echo str_repeat($name, 4);
echo "<br>";

// 7) rtrim()  => removes the white spaces at the end of the string
echo "<pre>";
echo rtrim("    My name is Jayesh   ");
echo "</pre>";

// 8) ltrim()  => removes the white spaces at the start of the string
echo "<pre>";
echo ltrim("    My name is Jayesh   ");
echo "</pre>";
echo "<br>";

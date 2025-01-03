<style>
  body {
    text-align: justify;
  }
</style>

# <h1 style="text-align: center;"> PHP DataTypes </h1>

<b>
Data type specifies the type of value a variable requires to do various operations without causing an error.
</b>

By default, PHP provides the following built-in data types:

- String
- Integer
- Float
- Boolean
- Array
- NULL

## 1. String

A string is a sequence of characters that holds letters and numbers. It can be anything written inside single or double quotes.

```php
<?php
$string = "Hello world!";
echo "String: ";
var_dump($string);
?>
```

## 2. Integer

An integer is a non-decimal number typically ranging between -2,147,483,648 and 2,147,483,647.

```php
<?php
$integer = 55;
echo "Integer: ";
var_dump($integer);
?>
```

## 3. Float

A float is a number with a decimal point. It can be an exponential number or a fraction.

```php
<?php
$float = 52.55;
echo "Float: ";
var_dump($float);
?>
```

## 4. Boolean

A Boolean represents two values: True or False.

```php
<?php
$boolean = true;
echo "Boolean: ";
var_dump($boolean);
?>
```

## 5. Array

Array is a collection of similar data elements stored in a single variable.

```php
<?php
$array = array("Rohan", "Lovish", "Harry");
echo "\nArray: ";
var_dump($array);
?>
```

## 6. NULL

Null is a special data type with only one value which is NULL. In PHP, if a variable is created without passing a value, it will automatically assign itself a value of NULL.

```php
<?php
$null = null;
echo "\nNull: ";
var_dump($null);
?>
```

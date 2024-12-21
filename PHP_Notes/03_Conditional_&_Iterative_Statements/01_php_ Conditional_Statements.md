<style>
  body {
    text-align: justify;
  }
  th, td{
    text-align: center;
  }
</style>

# <h1 style="text-align: center;"> PHP Conditional Statements </h1>

**Conditional Statements are used to perform actions based on different conditions. Sometimes when we write a program, we want to perform some different actions for different actions. We can solve this by using conditional statements.**

In PHP We have these conditional statements:

1. if Statement
2. if-else Statement
3. if-elseif Statement
4. Switch statement

## 1. if Statement

This statement executes the block of code inside if statement if the expression is evaluated as True.

**Example:**

```php
<?php
$x = "22"; // String comparison
if ($x < "20") {
  echo "Hello World!"; // This will not execute because 22 is not less than 20
}
?>
```

## 2. if-else Statement

This statement executes the block of code inside the if statement if the expression is evaluated as True and executes the block og code inside the else statement if the expression is evaluated as False.

**Example:**

```php
<?php
$x = "22"; // String comparison
if ($x < "20") {
  echo "Less than 20"; // This will not execute
} else {
  echo "Greater than 20"; // This will execute
}
?>
```

## 3. if-elseif-else

```php
<?php
$x = "22"; // String comparison
if ($x == "22") {
  echo "correct guess"; // This will execute
} elseif ($x < "22") {
  echo "Less than 22"; // This will not execute
} else {
  echo "Greater than 22"; // This will not execute
}
?>
```

## 4. Switch statement

This statement allows us to execute different blocks of code based on different conditions. Rather than using if-else-if, we can use the switch statement to make our program.

**Example**

```php
<?php
$i = "2"; // String comparison
switch ($i) {
    case 0:
        echo "i equals 0"; // This will not execute
        break;
    case 1:
        echo "i equals 1"; // This will not execute
        break;
    case 2:
        echo "i equals 2"; // This will execute because $i is equal to "2"
        break;
    default:
       echo "i is not equal to 0, 1 or 2"; // This will not execute
}
?>
```

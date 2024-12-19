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
<?php
$x = "22"; // String comparison
if ($x < "20") {
  echo "Hello World!"; // This will not execute
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

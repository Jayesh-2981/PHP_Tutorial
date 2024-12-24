<style>
    body {
        text-align:justify;
    }
    h1 {
        text-align:center;
    }
</style>

# <h1 style="text-align: center;"> PHP Iterative Statements </h1>

**Iterative Statements are used to run same block of code over and over again for a certain number of times.**

**In PHP, we have the following loops:**

1. while loop
2. do-while loop
3. for loop
4. foreach loop

## 1. While Loop

The while loop in PHP is used when we need to execute a block of code again and again based on a given condition. If the condition never becomes false, the while loop keeps getting executed. Such a loop is knwon as an infinite loop.

**Example**

```php
<?php
$x = 1;
while($x <= 10) {
  echo "The number is: $x <br>";
  $x++;
}
?>
```

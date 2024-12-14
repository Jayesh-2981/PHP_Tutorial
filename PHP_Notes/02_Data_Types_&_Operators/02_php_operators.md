<style>
  body {
    text-align: justify;
  }
  th, td{
    text-align: center;
  }
</style>

# <h1 style="text-align: center;"> PHP Operators </h1>

## 1. Arithmetic Operators

Arithmetic operators are used to perform arithmetic operations.

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Operator</th>
            <th>Example</th>
            <th>Short Explanation</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Addition</td>
            <td>+</td>
            <td>$x + $y</td>
            <td>Calculates the sum of two values.</td>
        </tr>
        <tr>
            <td>Subtraction</td>
            <td>-</td>
            <td>$x - $y</td>
            <td>Calculates the difference between two values.</td>
        </tr>
        <tr>
            <td>Multiplication</td>
            <td>*</td>
            <td>$x * $y</td>
            <td>Calculates the product of two values.</td>
        </tr>
        <tr>
            <td>Division</td>
            <td>/</td>
            <td>$x / $y</td>
            <td>Calculates the quotient of two values.</td>
        </tr>
        <tr>
            <td>Modulus</td>
            <td>%</td>
            <td>$x % $y</td>
            <td>Calculates the remainder of the division of two values.</td>
        </tr>
        <tr>
            <td>Exponentiation</td>
            <td>**</td>
            <td>$x ** $y</td>
            <td>Calculates the value of one number raised to the power of another.</td>
        </tr>
    </tbody>
</table>

## 2. Assignment Operators

These operators are used to assign values to variables.

<table border="1">
    <tr>
        <th>Name</th>
        <th>Evaluated as</th>
        <th>Short Explanation</th>
    </tr>
    <tr>
        <td>=</td>
        <td>a = b</td>
        <td>Assigns the value of b to a.</td>
    </tr>
    <tr>
        <td>+=</td>
        <td>a += b</td>
        <td>Adds b to a and assigns the result to a.</td>
    </tr>
    <tr>
        <td>-=</td>
        <td>a -= b</td>
        <td>Subtracts b from a and assigns the result to a.</td>
    </tr>
    <tr>
        <td>*=</td>
        <td>a *= b</td>
        <td>Multiplies a by b and assigns the result to a.</td>
    </tr>
    <tr>
        <td>/=</td>
        <td>a /= b</td>
        <td>Divides a by b and assigns the result to a.</td>
    </tr>
    <tr>
        <td>%=</td>
        <td>a %= b</td>
        <td>Calculates the remainder of a divided by b and assigns it to a.</td>
    </tr>
</table>

## 3. Comparison Operators

These operators are used to compare two values.

<table border="1">
    <tr>
        <th>Name</th>
        <th>Operator</th>
        <th>Example</th>
        <th>Short Explanation</th>
    </tr>
    <tr>
        <td>Equal</td>
        <td>==</td>
        <td>$x == $y</td>
        <td>Checks if the values of x and y are equal (type is ignored).</td>
    </tr>
    <tr>
        <td>Identical</td>
        <td>===</td>
        <td>$x === $y</td>
        <td>Checks if x and y are equal and of the same type.</td>
    </tr>
    <tr>
        <td>Not equal</td>
        <td>!=</td>
        <td>$x != $y</td>
        <td>Checks if the values of x and y are not equal (type is ignored).</td>
    </tr>
    <tr>
        <td>Not equal</td>
        <td><></td>
        <td>$x <> $y</td>
        <td>Checks if the values of x and y are not equal (type is ignored).</td>
    </tr>
    <tr>
        <td>Not Identical</td>
        <td>!==</td>
        <td>$x !== $y</td>
        <td>Checks if x and y are not equal or not of the same type.</td>
    </tr>
    <tr>
        <td>Greater than</td>
        <td>></td>
        <td>$x > $y</td>
        <td>Checks if x is greater than y.</td>
    </tr>
    <tr>
        <td>Less than</td>
        <td><</td>
        <td>$x < $y</td>
        <td>Checks if x is less than y.</td>
    </tr>
    <tr>
        <td>Greater than or equal to</td>
        <td>>=</td>
        <td>$x >= $y</td>
        <td>Checks if x is greater than or equal to y.</td>
    </tr>
    <tr>
        <td>Less than or equal to</td>
        <td><=</td>
        <td>$x <= $y</td>
        <td>Checks if x is less than or equal to y.</td>
    </tr>
    <tr>
        <td>Spaceship</td>
        <td><=></td>
        <td>$x <=> $y</td>
        <td>Returns -1, 0, or 1 when x is less than, equal to, or greater than y.</td>
    </tr>
</table>

## 4. PHP Increment/ Decrement Operators

These operators are used to increment/ decrement variable’s value.

<table border="1">
    <tr>
        <th>Name</th>
        <th>Operator</th>
        <th>Short Explanation</th>
    </tr>
    <tr>
        <td>Pre-Increment</td>
        <td>++$x</td>
        <td>Increments the value of x by 1 and returns the new value.</td>
    </tr>
    <tr>
        <td>Post-Increment</td>
        <td>$x++</td>
        <td>Returns the current value of x, then increments it by 1.</td>
    </tr>
    <tr>
        <td>Pre-Decrement</td>
        <td>--$x</td>
        <td>Decrements the value of x by 1 and returns the new value.</td>
    </tr>
    <tr>
        <td>Post-Decrement</td>
        <td>$x--</td>
        <td>Returns the current value of x, then decrements it by 1.</td>
    </tr>
</table>

## 5. PHP Logical Operators

These are the logical operators that combine conditional statements.

<table border="1">
    <tr>
        <th>Name</th>
        <th>Operator</th>
        <th>Example</th>
        <th>Short Explanation</th>
    </tr>
    <tr>
        <td>And</td>
        <td>and</td>
        <td>$x and $y</td>
        <td>Returns true if both x and y are true.</td>
    </tr>
    <tr>
        <td>Or</td>
        <td>or</td>
        <td>$x or $y</td>
        <td>Returns true if either x or y is true.</td>
    </tr>
    <tr>
        <td>Xor</td>
        <td>xor</td>
        <td>$x xor $y</td>
        <td>Returns true if either x or y is true, but not both.</td>
    </tr>
    <tr>
        <td>And</td>
        <td>&&</td>
        <td>$x && $y</td>
        <td>Returns true if both x and y are true (short-circuit evaluation).</td>
    </tr>
    <tr>
        <td>Or</td>
        <td>||</td>
        <td>$x || $y</td>
        <td>Returns true if either x or y is true (short-circuit evaluation).</td>
    </tr>
    <tr>
        <td>Not</td>
        <td>!</td>
        <td>!$x</td>
        <td>Returns true if x is false; otherwise, it returns false.</td>
    </tr>
</table>

## 6. PHP String Operators

PHP has these two operators designed for strings.

<table border="1">
    <tr>
        <th>Name</th>
        <th>Operator</th>
        <th>Example</th>
        <th>Short Explanation</th>
    </tr>
    <tr>
        <td>Concatenation</td>
        <td>.</td>
        <td>$text1 . $text2</td>
        <td>Joins two strings together.</td>
    </tr>
    <tr>
        <td>Concatenation Assignment</td>
        <td>.=</td>
        <td>$text1 .= $text2</td>
        <td>Appends the value of text2 to text1.</td>
    </tr>
</table>

## 7. PHP Array Operators

These Operators are used to compare arrays.

<table border="1">
    <tr>
        <th>Name</th>
        <th>Operator</th>
        <th>Example</th>
        <th>Short Explanation</th>
    </tr>
    <tr>
        <td>Union</td>
        <td>+</td>
        <td>$x + $y</td>
        <td>Combines two arrays into one.</td>
    </tr>
    <tr>
        <td>Equality</td>
        <td>==</td>
        <td>$x == $y</td>
        <td>Checks if the values of x and y are equal (type is ignored).</td>
    </tr>
    <tr>
        <td>Identity</td>
        <td>===</td>
        <td>$x === $y</td>
        <td>Checks if x and y are equal and of the same type.</td>
    </tr>
    <tr>
        <td>Inequality</td>
        <td>!=</td>
        <td>$x != $y</td>
        <td>Checks if the values of x and y are not equal (type is ignored).</td>
    </tr>
    <tr>
        <td>Inequality</td>
        <td><></td>
        <td>$x <> $y</td>
        <td>Checks if the values of x and y are not equal (type is ignored).</td>
    </tr>
    <tr>
        <td>Non-Identity</td>
        <td>!==</td>
        <td>$x !== $y</td>
        <td>Checks if x and y are not equal or not of the same type.</td>
    </tr>
</table>

## 8. PHP Conditional Operators

These operators assign values to operands based on the outcome of a certain condition.

<table border="1">
    <tr>
        <th>Name</th>
        <th>Operator</th>
        <th>Example</th>
        <th>Short Explanation</th>
    </tr>
    <tr>
        <td>Ternary</td>
        <td>?:</td>
        <td>$x = exp1 ? exp2 : exp3</td>
        <td>Returns exp2 if exp1 is true; otherwise, returns exp3.</td>
    </tr>
    <tr>
        <td>Null Coalescing</td>
        <td>??</td>
        <td>$x = exp1 ?? exp2</td>
        <td>Returns exp1 if it exists and is not null; otherwise, returns exp2.</td>
    </tr>
</table>

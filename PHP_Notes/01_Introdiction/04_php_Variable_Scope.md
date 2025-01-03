<style>
  body {
    text-align: justify;
  }
</style>

# <h1 style="text-align: center;"> Variable Scope</h1>

<b>
The scope of the varibale is the area within which the variable has been created. 
Based on this a varibale can either have to local scope or a global scope or a static scope in PHP.
</b>

## Global Variable:

A varibale which was created in the main body of the code and that can be accessed anywhere in the program is called Global Variable. Global varibales can be directly accessed or used in or outside of a function with GLOBAL keyword before variable.
However, we can also call them without the global keyword.

#### For Example:

```php
<?php
    $name = "Jayesh Jadhav";        //Global Variable
    function global_var()
    {
        global $name;
        echo "Variable inside the function: ". $name;
        echo "</br>";
    }
    global_var();
    echo "Variable outside the function: ". $name;
?>
```

#### Output:

```
Variable inside the function: Jayesh Jadhav
Variable outside the function: Jayesh Jadhav
```

## Local Variable:

A local variable is created within a function and can be only used inside the function. This means that these variables cannot be accessed outside the function, as they have local scope.

#### For Example:

```php
<?php
    function mytest()
    {
        $capital = "Delhi";
        echo "Capital of India is: " .$capital;
    }
    mytest(); //Calling the function
    //using $capital outside the function will generate an error
    echo $capital;
?>
```

#### Output:

```
Capital of India is: Delhi                                                            Notice: Undefined variable: capital in D:\xampp\htdocs\program\var.php on line 28
```

## Static Variable:

PHP has a feature that deletes the variable once it has finished execution and frees the memory.
When we need a local variable which can store its value even after the execution, we use thee static keyword before it and the variable is called static variable.
These variables only exist in a local function and do not get deleted after the execution has been completed.

#### For Example:

```php
<?php
    function static_var()
    {
        static $num1 = 3;    //static variable
        $num2 = 6;          //Non-static variable
        //increment in non-static variable which will increment its value to 7
        $num1++;
        //increment in static variable which will increment its value to 4 after first execution and 5 after second execution
        $num2++;
        echo "Static: " .$num1 ."</br>";
        echo "Non-static: " .$num2 ."</br>";
    }


//first function call
    static_var();

//second function call
    static_var();
?>
```

#### Output:

```
Static: 4
Non-static: 7
Static: 5
Non-static: 7
```

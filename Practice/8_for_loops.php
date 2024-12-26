<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loops in php</title>
</head>

<body>
    <?php
    echo "This is for loop in action <br>";

    for ($index = 0; $index <= 5; $index++) {
        // for (initialization; condition; updation)
        echo "The index is $index <br>";
    }

    // Avoid running into infinite loops
    // for ($i=0; $i < 87; ) {
    // echo $i;
    // }

    echo "For loop has ended <br>";

    ?>
</body>

</html>
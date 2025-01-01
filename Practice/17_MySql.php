<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting to MySql</title>
</head>

<body>
    <?php

    echo "<h1><center>Connecting php with MySql<br></center></h1>";

    // Define database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = ""; // Make it empty otherwise connection will fail and we got an error

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully";
    }

    // Close the connection when you're done with it
    mysqli_close($conn);

    ?>
</body>

</html>

<?php

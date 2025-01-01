<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating MySQL Database</title>
</head>

<body>
    <?php

    // Display a heading to indicate the purpose of the page
    echo "<h1><center>Connecting PHP with MySQL<br></center></h1>";

    // Define database connection parameters
    $servername = "localhost"; // Server name (usually 'localhost' for local development)
    $username = "root";        // MySQL username (default is 'root' for local development)
    $password = "";            // MySQL password (leave empty for default local setup)

    // Create a connection to the MySQL server
    $conn = new mysqli($servername, $username, $password);

    // Check if the connection was successful
    if ($conn->connect_error) {
        // If connection fails, display an error message and terminate the script
        die("Connection failed: " . $conn->connect_error . "<br>");
    } else {
        // If connection is successful, display a success message
        echo "Connected successfully" . "<br>";
    }

    // SQL query to create a database named 'dbemp' if it doesn't already exist
    $sql = "CREATE DATABASE IF NOT EXISTS dbemp";

    // Execute the SQL query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        // If the database is created successfully, display a success message
        echo "Database created successfully <br>";
    } else {
        // If there's an error, display the error message
        echo "Error creating database: " . $conn->error . "<br>";
    }

    // Close the database connection when done
    $conn->close();
    // Display a message indicating the connection was closed
    echo "Connection closed successfully <br>";
    ?>

</body>

</html>
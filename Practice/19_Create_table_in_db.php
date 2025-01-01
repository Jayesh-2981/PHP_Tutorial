<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating Table inside MySQL Database</title>
</head>

<body>
    <?php

    // **Step 1: Display a Heading**
    // Indicate the purpose of the page to the user
    echo "<h1><center>Creating Table inside MySQL Database<br></center></h1>";

    // **Step 2: Define Database Connection Parameters**
    // These are the credentials to connect to the MySQL database
    $servername = "localhost"; // Server name (usually 'localhost' for local development)
    $username = "root";        // MySQL username (default is 'root' for local development)
    $password = "";            // MySQL password (leave empty for default local setup)
    $database = "dbemp";       // Name of the database to connect to

    try {
        // **Step 3: Create a Connection to the MySQL Server**
        // Use the mysqli class to establish a connection
        $conn = new mysqli($servername, $username, $password, $database);

        // **Step 4: Check if the Connection was Successful**
        // If the connection fails, throw an exception with the error message
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        // **Step 5: Confirm Successful Connection**
        echo "Connection created successfully <br>";

        // **Step 6: Define SQL Query to Create a Table**
        // Create a table named 'mytable' with the following columns:
        // - sno: Auto-incrementing primary key
        // - name: A string of up to 11 characters
        // - age: An integer
        // - gender: A string of up to 11 characters
        $sql = "CREATE TABLE IF NOT EXISTS `mytable` (
            `sno` INT(11) NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(11) NOT NULL,
            `age` INT(11) NOT NULL,
            `gender` VARCHAR(11) NOT NULL,
            PRIMARY KEY (`sno`)
        )";

        // **Step 7: Execute the SQL Query**
        // If the query is successful, display a success message
        // If the query fails, throw an exception with the error message
        if ($conn->query($sql) === TRUE) {
            echo "The table was created successfully<br>";
        } else {
            throw new Exception("Error creating table: " . $conn->error);
        }
    } catch (Exception $e) {
        // **Step 8: Handle Exceptions**
        // Display any errors that occur during the process
        echo "An error occurred: " . $e->getMessage() . "<br>";
    } finally {
        // **Step 9: Close the Database Connection**
        // Ensure the connection is closed to free up resources
        if (isset($conn)) {
            $conn->close();
            echo "Connection closed successfully <br>";
        }
    }
    ?>

</body>

</html>
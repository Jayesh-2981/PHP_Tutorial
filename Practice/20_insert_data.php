<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting data in table using php</title>
</head>

<body>
    <?php
    // **Step 1: Display a Heading**
    // Indicate the purpose of the page to the user
    echo "<h1><center>Insert Data in Table Using PHP<br></center></h1>";

    // **Step 2: Define Database Connection Parameters**
    // These are the credentials to connect to the MySQL database
    $servername = "localhost"; // Server name (usually 'localhost' for local development)
    $username = "root";        // MySQL username (default is 'root' for local development)
    $password = "";            // MySQL password (leave empty for default local setup)
    $dbname = "dbemp";         // Name of the database to connect to

    // **Step 3: Create a Connection to the MySQL Server**
    // Use the mysqli_connect function to establish a connection
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    // **Step 4: Check if the Connection was Successful**
    // If the connection fails, terminate the script and display an error message
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // **Step 5: Confirm Successful Connection**
        echo "Connection was successful...!!!<br>";
    }

    // **Step 6: Define Data to Insert**
    // Define variables for the data to be inserted into the table
    $name = "Jaya";    // Name of the person
    $female = "female"; // Gender value for female
    $male = "male";     // Gender value for male

    // **Step 7: Define SQL Query to Insert Data**
    // Create an SQL query to insert data into the 'mytable' table
    $sql = "INSERT INTO `mytable` (`name`, `age`, `gender`) VALUES ('$name', '23', '$female')";

    // **Step 8: Execute the SQL Query**
    // Use mysqli_query to execute the query and check if it was successful
    $executionQuery = mysqli_query($connection, $sql);

    // **Step 9: Check if the Query was Successful**
    // If the query is successful, display a success message
    // If the query fails, display an error message
    if ($executionQuery) {
        echo "Data inserted successfully...!<br>";
    } else {
        echo "Data not inserted because of this error ---> " . mysqli_error($connection) . "<br>";
    }

    // **Step 10: Close the Database Connection**
    // Ensure the connection is closed to free up resources
    $connection->close();
    echo "Connection closed successfully <br>";
    ?>
</body>

</html>
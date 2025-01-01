<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting to MySQL</title>
</head>

<body>
    <?php

    // Display a heading to indicate the purpose of the page
    echo "<h1><center>Connecting PHP with MySQL<br></center></h1>";

    // **Database Connection Parameters**
    // Define the server name, username, and password for the MySQL database
    $servername = "localhost"; // Server where the database is hosted
    $username = "root";        // Default username for MySQL
    $password = "";            // Password for the database (empty for local development)

    // **Create a Connection**
    // Use mysqli_connect() to establish a connection to the MySQL server
    $conn = mysqli_connect($servername, $username, $password);

    // **Check Connection**
    // Verify if the connection was successful
    if (!$conn) {
        // If the connection fails, display an error message and terminate the script
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // If the connection is successful, display a success message
        echo "Connected successfully";
    }

    // **Close the Connection**
    // Always close the database connection when it's no longer needed
    mysqli_close($conn);

    ?>
</body>

</html>
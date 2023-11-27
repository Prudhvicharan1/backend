<?php
// Assuming you've already connected to the database
session_start();
// ...
{

    $username = "";
    $email    = "";
    // Insert data into the database (replace with your actual SQL query)
    $connection= mysqli_connect('localhost', 'root', '', 'login');
    $query = "INSERT INTO users (username, email) VALUES ('$username', '$email')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Data successfully inserted!";
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $username = $_POST['username'];
    $email = $_POST['email'];}
?>

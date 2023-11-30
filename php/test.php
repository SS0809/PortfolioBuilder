<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host = "localhost";
$port = "5432";
$dbname = "postgres"; 
$user = "postgres"; 
$password = "0111cs211163"; 

// Test the connection to PostgreSQL server
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if ($conn === false) {
    echo "Failed to connect to PostgreSQL server: " . pg_last_error();
} else {
    echo "Connected to PostgreSQL server successfully!";
    
    // Fetch data from the registered_users table
    $query = "SELECT id, user_name, display_name, password, email, points, suggest, filename, sudo, chart_data, pay, goal, sabout, about, youtube, insta FROM public.registered_users;";
    $result = pg_query($conn, $query);
    
    if ($result) {
        // Loop through the rows and access individual columns
        while ($row = pg_fetch_assoc($result)) {
            echo "<br>";
            echo "ID: " . $row['id'] . "<br>";
            echo "User Name: " . $row['user_name'] . "<br>";
            echo "Display Name: " . $row['display_name'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
            // Access other columns in a similar manner
        }
        // Free the result variable after use
        pg_free_result($result);
    } else {
        echo "Error executing the query: " . pg_last_error($conn);
    }
    
    // Close the connection
    pg_close($conn);
}
?>

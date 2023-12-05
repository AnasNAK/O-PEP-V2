<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'OPEP';

// Create a connection
$mysqli = mysqli_connect($host, $user, $pass, $dbname);

// // Check the connection
// if (!$mysqli) {
//     die("Connection failed: " . mysqli_connect_error());
// }else{
//     echo"connect ";
// }

// Set character set if needed
mysqli_set_charset($mysqli, "utf8mb4");

// Connected successfully
// Uncomment the following line if you want to display a success message
// echo "Connected successfully";

// Note: Similar to the previous example, mysqli doesn't have a dedicated attribute for setting the default fetch mode globally.

// Close the connection when you're done
// mysqli_close($mysqli);
?>

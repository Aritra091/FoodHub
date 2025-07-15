<?php
// Correct database connection: hostname, username, password, database_name
$con = mysqli_connect("localhost", "root", "", "restaurant");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";

# Create connection
$connection = mysqli_connect($servername, $username, $password);

# Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

# Change character set to utf8
mysqli_set_charset($connection, "utf8");

?>
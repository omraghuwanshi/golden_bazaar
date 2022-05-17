<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "golden_bazaar_in";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
            } 
			

?>
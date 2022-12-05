<?php
$servername = "localhost";
$username = "root";
$password = "06022002";
$dbname = "laptops";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
$result_size = mysqli_num_rows($result);
mysqli_close($conn);
?>
<?php
$servername = "sql111.epizy.com";
$username = "epiz_32907580";
$password = "GM5QZ9uPX1IQ";
$dbname = "epiz_32907580_store";
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
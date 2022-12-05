<?php
$servername = "sg2plzcpnl491286.prod.sin2.secureserver.net";
$username = "TheFirstUser123";
$password = "SE13number1";
$dbname = "MyWebDatabase";
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
<?php
$servername = "localhost";
$username = "root";
$password = "06022002";
$dbname = "laptops";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT productId FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["productId"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
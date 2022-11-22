<?php
include './models/sql_connect.php';
$output;
while ($row = mysqli_fetch_array($result)) {
  if ($row["productId"] == $_GET["product-id"]) {
    $output = $row;
    break;
  }
}
echo $output;
?>
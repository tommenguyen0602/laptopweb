<?php
require '../vendor/autoload.php';
$servername = "localhost";
$username = "root";
$password = "06022002";
$dbname = "laptops";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE productId = 4";
$result = $conn->query($sql);
$product = $result->fetch_assoc();
$conn->close();


$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader);
echo $twig->render('product_details.html', array(
    'productName' => $product["productName"],
    'productBrand' => $product["productBrand"],
    'productCPU' => $product["productCPU"],
    'productRam' => $product["productRam"],
    'productPrice' => $product["productPrice"],
    'productImage' => $product["productImage"],
));
?>
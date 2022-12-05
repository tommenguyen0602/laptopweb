<?php
include 'data.php';
echo '
<p class="row bg-dark" id="random-product-heading">LAPTOP</p>';
for ($x = 0; $x < 4; $x++) {
echo '<div class="row">';
$row = mysqli_fetch_array($result);
echo '
    <div class="col-3"
        <div class="card">
        <a href = "product-details.php?product-id=' .$row["productId"] . '">
        <img class="card-img-top" src=".' . $row["productImage"] . ' " alt="">
        </a>
        <p>' . $row["productName"] . ' </p>
        <p style="font-weight: bold">'.$row["productPrice"].'<sup>đ</sup></p>
        </div>

';

$row = mysqli_fetch_array($result);
echo '
    <div class="col-3"
        <div class="card">
        <a href = "product-details.php?product-id=' .$row["productId"] . '">
        <img class="card-img-top" src=".' . $row["productImage"] . ' " alt="">
        </a>
        <p>' . $row["productName"] . ' </p>
        <p style="font-weight: bold">'.$row["productPrice"].'<sup>đ</sup></p>
        </div>

';

$row = mysqli_fetch_array($result);
echo '
    <div class="col-3"
        <div class="card">
        <a href = "product-details.php?product-id=' .$row["productId"] . '">
        <img class="card-img-top" src=".' . $row["productImage"] . ' " alt="">
        </a>
        <p>' . $row["productName"] . ' </p>
        <p style="font-weight: bold">'.$row["productPrice"].'<sup>đ</sup></p>
        </div>

';

$row = mysqli_fetch_array($result);
echo '
    <div class="col-3"
        <div class="card">
        <a href = "product-details.php?product-id=' .$row["productId"] . '">
        <img class="card-img-top" src=".' . $row["productImage"] . ' " alt="">
        </a>
        <p>' . $row["productName"] . ' </p>
        <p style="font-weight: bold">'.$row["productPrice"].'<sup>đ</sup></p>
        </div>

';
echo '</div>';
}
?>
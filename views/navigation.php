<?php
echo '
<script src="https://uhchat.net/code.php?f=7a9d08"></script>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light py-3">
<div class="container-fluid">
  <a class="navbar-brand" href="./index.php">SE13</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
          <form class="form-inline" action="search_results.php" method="POST">
          <input class="form-control mr-sm-2" type="search" placeholder="Nhập tên sản phẩm" name = "search" aria-label="search">
          </form>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./store.php?sort=asc">Cửa hàng</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="return-policy.php">Chính sách đổi trả-hoàn tiền</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shipping-policy.php">Chính sách vận chuyển</a>
      </li>
      <li class="nav-item">
          <a href="cartpage.php" >
            <i class="bi bi-cart"></i>
          </a>
      </li>
      </ul>
  </div>
</div>
</nav>';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Thanh to</title>
  <?php include 'head.php'; ?>

  <link rel="stylesheet" href="style.css">
  <script src="chatbox.js"></script>
</head>

<body>
  <div id="navigation">
        <?php include 'navigation.php';?>
  </div>  
  <div class="container" style="padding-top: 80px">
  <form>
    <section class="cart">
      <div class="container">
        <div class="cart-content row">
          <div class="cart-content-left">
            <div class="cart-title">
              <p><b>GIỎ HÀNG CỦA BẠN</b></p>
            </div>
            <table>
              <tr>
                <th>SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ</th>
                <th>THÀNH TIỀN</th>
                <th>XÓA</th>
              </tr>
              <tr>
                <td><img src="images/Laptop Gaming Asus ROG Strix SCAR 17 G733ZX LL016W.webp" alt="" height="120"></td>
                <td>Laptop Gaming Asus ROG Strix SCAR 17 G733ZX LL016W</td>
                <td><input type="number" min="1" value="1" required></td>
                <td>80.000.000<sup>₫</sup></td>
                <td>80.000.000<sup>₫</sup></td>
                <td><span>X</span> </td>
              </tr>
              <tr>
                <td><img src="images/Laptop Gaming MSI Katana GF66 11UC 676VN.webp" alt="" height="150"></td>
                <td>Laptop Gaming MSI Katana GF66 11UC 676VN</td>
                <td><input type="number" min="1" value="1" required></td>
                <td>23.490.000<sup>₫</sup></td>
                <td>46.980.000<sup>₫</sup></td>
                <td><span>X</span> </td>
              </tr>
            </table>
          </div>
          <div class="cart-content-right">
            <table>
              <tr>
                <th colspan="2">TÓM TẮT ĐƠN HÀNG</th>
              </tr>
              <tr class="products-price">
                <td>TỔNG TIỀN SẢN PHẨM</td>
                <td>46.980.000<sup>₫</sup></td>
              </tr>
              <tr class="shipping-price">
                <td>PHÍ VẬN CHUYỂN</td>
                <td>MIỄN PHÍ</td>
              </tr>
              <tr class="total-price">
                <td>TỔNG</td>
                <td>46.980.000<sup>₫</sup></td>
              </tr>
            </table>
            <div class="cart-content-right-button">
              <button >THANH TOÁN NGAY</button>
            </div>
          </div>
        </div>
        <div class="cart-discount">
          <i class="fa-thin fa-tag"></i>
          <p>NHẬP MỘT MÃ KHUYẾN MẠI</p>
          <input type="text" name="discount-code" id="cart-discount" placeholder="Nhập một mã khuyến mại">
          <button ><i class="fas fa-shopping-cart"></i>ÁP DỤNG</button>
        </div>
        <div class="cart-note">
          <p>THÊM GHI CHÚ</p>
          <input type="text" name="note" id="cart-note" placeholder="Yêu cầu đặc biệt? Hãy thêm chúng tại đây">
        </div>      
      </div>
    </section>
    </form>
  </div>
  <footer  class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-dark" href="https://tommenguyen0602.wixsite.com/se13">SE13.com</a> 
      <?php
      foreach ($_COOKIE as $key=>$val)
      {
        echo $key.' is '.$val."<br>\n";
      }
      ?>
    </div>
    
    
    <!-- Copyright -->
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>

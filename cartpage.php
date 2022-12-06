<!DOCTYPE html>
<html lang='vi'>

<head>
  <title>Thanh to</title>
  <?php include 'head.php'; ?>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="button.css">
  <script src="chatbox.js"></script>
</head>

<body>
  <div id="navigation">
    <?php include 'navigation.php'; ?>
  </div>
  <div class="container-fluid" style="padding-top: 80px">
    <form method="POST" action="payment_success.php">
      <section class="cart">
        <div class="container-fluid">
          <div class="cart-content row">
            <div class="cart-content-left">
              <div class="cart-title">
                <p><b>GIỎ HÀNG CỦA BẠN</b></p>
              </div>
              <table>
                <tr>
                  <th>ẢNH SẢN PHẨM</th>
                  <th>MÃ SẢN PHẨM</th>
                  <th>TÊN SẢN PHẨM</th>
                  <th>SỐ LƯỢNG</th>
                  <th>GIÁ</th>
                  <th>THÀNH TIỀN</th>
                </tr>
                <?php
                $tong = 0;
                foreach ($_COOKIE as $key => $value) {
                  if (is_int($key)) {
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

                    $sql = 'SELECT * FROM products WHERE productId = \'' . $key . '\'';
                    $result = mysqli_query($conn, $sql);
                    $result_size = mysqli_num_rows($result);
                    mysqli_close($conn);
                    $row = mysqli_fetch_array($result);
                    //show

                    echo '
                      <tr>
                        <td><img src="' . $row["productImage"] . '" alt="" height="120"></td>
                        <td><input type="number" name = "id" min="1" value="' . $key . '" disabled></td>
                        <td>' . $row["productName"] . '</td>
                        <td><input type="number" name = "' . $key . '" min="1" value="' . $value . '" readonly></td>
                        <td>' . number_format($row["productPrice"]) . '<sup>₫</sup></td>
                        <td>' . number_format(($row["productPrice"] * $value)) . '<sup>₫</sup></td>
                      </tr>
                    ';
                    $tong = $tong + $row["productPrice"] * $value;
                  }
                }
                echo '
                </table>
          </div>
          <div class="cart-content-right">
            <table>
              <tr>
                <th colspan="2">TÓM TẮT ĐƠN HÀNG</th>
              </tr>
              <tr class="products-price">
                <td>TỔNG TIỀN SẢN PHẨM</td>
                <td>' . number_format($tong) . '<sup>₫</sup></td>
              </tr>
              <tr class="shipping-price">
                <td>PHÍ VẬN CHUYỂN</td>
                <td>MIỄN PHÍ</td>
              </tr>
              <tr class="total-price">
                <td>TỔNG</td>
                <td>' . number_format($tong) . '<sup>₫</sup></td>
              </tr>

            </table>
                ';
                ?>


            </div>
            <button class="buttonfx curtaindown" formaction="deleteorder.php">Xóa hóa đơn</button>
          </div>

        </div>

      </section>
      <div class="container">
        <div class="section-content section-customer-information no-mb">
          <div class="fieldset">


            <div class="field field-required  ">
              <div class="field-input-wrapper">
                <label class="field-label" for="billing_address_full_name"></label>
                <input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_full_name" name="customer-name" value="" autocomplete="false" required>
              </div>

            </div>



            <div class="field field-required field-two-thirds  ">
              <div class="field-input-wrapper">
                <label class="field-label" for="checkout_user_email"></label>
                <input autocomplete="false" placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="checkout_user_email" name="customer-phone" value="" required>
              </div>

            </div>



            <div class="field field-required field-third  ">
              <div class="field-input-wrapper">
                <label class="field-label" for="billing_address_phone"></label>
                <input autocomplete="false" placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="15" type="tel" id="billing_address_phone" name="customer-address" value="" required>
              </div>

            </div>


          </div>
        </div>
        <button class="buttonfx curtaindown" type="submit">Thanh Toán COD</button>
      </div>

    </form>
  </div>
  <footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-dark" href="https://tommenguyen0602.wixsite.com/se13">SE13.com</a>
    </div>


    <!-- Copyright -->
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
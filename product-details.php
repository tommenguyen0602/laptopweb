<!DOCTYPE html>
<html lang="vi">
<head>
    <title>SE13|Home</title>
    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_product_details.css">
</head>
<body>
    <script>
        function addProductToCart(productId){
            
            alert("Thêm hàng vào giỏ thành công");
        }
        
    </script>
    <div id="navigation">
        <?php include 'navigation.php';?>
    </div>
    <div id = "products-details" class = "container">
        <?php
        session_start();
        $result;
        include 'data.php';
        while($row = mysqli_fetch_array($result)){
            if($row["productId"]== $_GET["product-id"]){
                $result = $row; 
                break;
            }
        }
        echo '
            <div class="row" id = "details-1">
                <div class="col-sm-6">
                    <img class = "image-responsive" src="' .$result["productImage"] . '" alt="">
                </div>
                <div class="col-sm-6" id = "nameandprice">
                    <p id = "productName">' . $result["productName"] . '</p>
                    <p style = "font-style:italic; font-size:30px" > ' .$result["productPrice"] . ' đ</p>
                    <form class="form-inline" action="session.php?sort=asc" method="POST">
                    <input class="form-control mr-sm-2" type="number" placeholder="Số lượng" name = "amount" aria-label="quantity" min = 1 value = 1>
                    <input type = "hidden" name = "product-id" value = ' . $_GET["product-id"] . '>
                    <button type="submit" class="btn btn-dark" onclick = addProductToCart('.$result["productId"] .')>Thêm vào giỏ hàng</button>
                    </form>
                    
                    <div id = "details-2">
                        <p>Nhà sản xuất: ' .$result["productBrand"] . '</p>
                        <p>CPU: ' . $result["productCPU"] . ' </p>
                        <p>Ram: ' . $result["productRam"] . ' </p>
                        <p>Ổ cứng: ' . $result["productHardDisk"] . ' </p>
                        <p>VGA: ' . $result["productVGA"] . ' </p>
                        <p>Màn hình: ' . $result["productScreen"] . ' </p> 
                        <p>Dung lượng pin: ' . $result["productBattery"] . ' </p> 
                        <p>Khối lượng: ' . $result["productWeight"] . ' </p> 
                    </div>
                    <p><br></p>
                    
                    
                </div>
            </div>
            
        '; //data here
        ?>
        
        
    </div>
    <div id="footer">
        <?php include 'footer.php';?>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>
</html>
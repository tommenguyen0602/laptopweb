<!DOCTYPE html>
<html lang="vi">
<head>
    <title>SE13|Home</title>
    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_index.css">
</head>
<body>
    
    <div id="navigation">
        <?php include 'navigation.php';?>
    </div>

    <div class="container" id = "sortingandpagination" style="padding-top: 80px"> 
        <div class = "row" style = "padding-top:8px;padding-bottom:8px">
            <div class="col-sm-6">
                <a class = "btn btn-primary" href="store.php?sort=asc">Giá tăng dần</a>
                <a class = "btn btn-primary" href="store.php?sort=desc">Giá giảm dần</a>
            </div>
        </div>
    </div>
    
    <div class="container" id = "card-collection">
        <?php
            session_start();
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
            $sql;
            if($_GET["sort"] == "asc"){
                $sql = "SELECT * FROM products order by productPrice asc";
            } else {
                $sql = "SELECT * FROM products order by productPrice desc";
            }
            $result = mysqli_query($conn, $sql);
            $result_size = mysqli_num_rows($result);
            
            for ($i=0; $i < $result_size/4; $i++) { 
            
                //open row tag
                echo '<div class="row">';
                for ($j=0; $j < 4; $j++) { 
                    if ($i * 4 + $j < $result_size) {
                        //print a card
                        $card = mysqli_fetch_array($result);
                        echo '
                            <div class="col-3">
                                <div class="card" >
                                    <a href = "product-details.php?product-id=' .$card["productId"] . '">
                                    <img class="card-img-top" src=".' . $card["productImage"] . ' " alt="">
                                    </a>
                                    <p>' . $card["productName"] . ' </p>
                                    <p style="font-weight: bold">'.$card["productPrice"].'<sup>đ</sup></p>
                                </div>
                            </div>
                        ';
                    }
    
                }
                //close row tag
                echo '</div>';
            }

            



            mysqli_close($conn);
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
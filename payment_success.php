<!DOCTYPE html>
<html lang="vi">
<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Cảm ơn quý khách đã mua hàng</title>
    <?php include 'head.php'; ?>

    <link rel="stylesheet" href="style.css">
    <script src="chatbox.js"></script>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">CẢM ƠN!</h1>
	</header>
	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.</p>
	</div>
    
    <div>

    </div>
    <div id="footer">
        <?php include 'footer.php';

        

    ?>
    </div>


    <div class="container">
    <?php include 'navigation.php';
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

    foreach ($_POST as $key => $value) {
        if(filter_var($key, FILTER_VALIDATE_INT) == true){
            $sql = 'INSERT INTO orders (customerName, customerAddress, customerPhone, productId,quantityOrdered)
            VALUES (\'' . $_POST["customer-name"]. '\',\''.$_POST["customer-address"]. '\',\''.$_POST["customer-phone"]. '\','.$key . ',' . $value . ')';
            if (mysqli_query($conn, $sql)) {
                
              } else {
                
              }
        }
    }
    mysqli_close($conn);


    //delete cookies

    ?>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>
</html>
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
<?php include 'data.php';
$id = $_REQUEST["id"];
$data=array();
while($row = mysqli_fetch_array($result)) {

    if($row["productId"] == $id) {
        $data[] = array(
          'productId' => $row['productId'],
          'productName' => $row['productName'],
          'productPrice' => $row['productPrice'],
          'productImage' => $row['productImage']
        );
        break;
    }
  }
  die(json_encode($data));
?>

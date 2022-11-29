<?php
include 'models/single_product.php';
echo $result;
$loader = new \Twig\Loader\FilesystemLoader('views');
$twig = new \Twig\Environment($loader);
echo $twig->render('product_details.html', array(
    'name' => 'egoist'
));
?>

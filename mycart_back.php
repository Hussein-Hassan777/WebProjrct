<?php
session_start();
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}
if(isset($_POST['cart'])){
    $product_id = $_POST['cart'];
    if(isset($_SESSION['cart'][$product_id])){
        $_SESSION['cart'][$product_id]++;
    } else {
        $_SESSION['cart'][$product_id] = 1;
    }
}
header("Location: index.php");
exit;

<?php
session_start();
if(isset($_POST['cart'])){
    $product_id = $_POST['cart'];
    if(isset($_SESSION['cart'][$product_id])){
        $_SESSION['cart'][$product_id] += 1;
    } else {
        $_SESSION['cart'][$product_id] = 1;
    }
}
if(isset($_POST['increase'])){
    $product_id = $_POST['increase'];
    if(isset($_SESSION['cart'][$product_id])){
        $_SESSION['cart'][$product_id] += 1;
    }
}
if(isset($_POST['decrease'])){
    $product_id = $_POST['decrease'];
    if(isset($_SESSION['cart'][$product_id])){
        $_SESSION['cart'][$product_id] -= 1;
        if($_SESSION['cart'][$product_id] <= 0){
            unset($_SESSION['cart'][$product_id]);
        }
    }
}
if(isset($_POST['remove'])){
    $product_id = $_POST['remove'];
    unset($_SESSION['cart'][$product_id]);
}

header("Location: mycart.php");
exit;

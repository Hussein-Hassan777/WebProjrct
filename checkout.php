<?php
session_start();
$conn = new mysqli("localhost:3306", "root", "", "ecommerce_db");
if($conn->connect_error) die("Connection failed: " . $conn->connect_error);
if(empty($_SESSION['cart'])){
    echo "<p>Your cart is empty. <a href='index.php'>Go back to products</a></p>";
    exit;
}
if(!isset($_SESSION['user_id'])){
    echo "<p>Please <a href='login.php'>login</a> first to proceed with checkout.</p>";
    exit;
}

$user_id = $_SESSION['user_id'];
$total = 0;

foreach($_SESSION['cart'] as $product_id => $quantity){
    $sql = "SELECT price, name FROM products WHERE id_P = '$product_id'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $product = $result->fetch_assoc();
        $total += $product['price'] * $quantity;
    }
}

$sql_order = "INSERT INTO orders (user_id, total_amount, created_at) VALUES ('$user_id', '$total', NOW())";
if($conn->query($sql_order) === TRUE){
    $order_id = $conn->insert_id;

    foreach($_SESSION['cart'] as $product_id => $quantity){
        $sql_item = "INSERT INTO order_items (order_id, product_id, quantity) VALUES ('$order_id', '$product_id', '$quantity')";
        $conn->query($sql_item);
    }

    $_SESSION['cart'] = [];

    echo "<p>Order completed successfully! <a href='index.php'>Go back to shopping</a></p>";
} else {
    echo "<p>Error: " . $conn->error . "</p>";
}

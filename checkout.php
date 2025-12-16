<?php include "conn.php"; ?>
<?php
session_start();

$user_id = 'G1';
$total = 0;

foreach ($_SESSION['cart'] as $product_id => $qty) {
    $sql = "SELECT price, name FROM products WHERE id_P='$product_id'";
    $res = $conn->query($sql);
    if ($res && $res->num_rows > 0) {
        $prod = $res->fetch_assoc();
        $total += $prod['price'] * $qty;
    }
}

if (isset($_GET['confirm'])) {
    $order_id = 'O' . time();
    $sql_order = "INSERT INTO orders (id_O, history, id_U) VALUES ('$order_id', NOW(), '$user_id')";
    $conn->query($sql_order);

    foreach ($_SESSION['cart'] as $product_id => $qty) {
        $id_ol = 'OL' . time() . rand(10, 99);
        $sql_item = "INSERT INTO order_lists (id_OL, id_O, id_P) VALUES ('$id_ol', '$order_id', '$product_id')";
        $conn->query($sql_item);
    }

    $_SESSION['cart'] = [];
    echo "<script>alert('Order completed successfully!'); window.location.href='index.php';</script>";
    exit;
}

echo "<script>
    if(confirm('Your total is $$total. Press OK to confirm order.')) {
        window.location.href='checkout.php?confirm=1';
    } else {
        window.location.href='mycart.php';
    }
</script>";
?>
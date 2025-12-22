<?php include "conn.php"; ?>

<?php
// Products
$products = [];
$result = mysqli_query($conn, "SELECT * FROM products");
if ($result && mysqli_num_rows($result) > 0) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
$count_result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM products");
$count_row = mysqli_fetch_assoc($count_result);
$total_products = $count_row['total'];

// Users
$users = [];
$result2 = mysqli_query($conn, "SELECT * FROM users");
if ($result2 && mysqli_num_rows($result2) > 0) {
    $users = mysqli_fetch_all($result2, MYSQLI_ASSOC);
}
$count_res = mysqli_query($conn, "SELECT COUNT(*) AS total FROM users");
$count_row2 = mysqli_fetch_assoc($count_res);
$total_users = $count_row2['total'];

// Orders + Total Order
$orders = [];
$sql = "
SELECT 
    o.id_O,
    o.history,
    o.guest_email,
    o.guest_phone,
    o.guest_address,
    SUM(p.price * ol.quantity) AS total_order
FROM orders o
JOIN order_lists ol ON o.id_O = ol.id_O
JOIN products p ON ol.id_P = p.id_P
GROUP BY o.id_O
ORDER BY o.history DESC
";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Orders Count
$order_count_result = mysqli_query($conn, "SELECT COUNT(*) AS total_orders FROM orders");
$order_count_row = mysqli_fetch_assoc($order_count_result);
$total_orders = $order_count_row['total_orders'];

// Total Sales
$total_sales_result = mysqli_query($conn, "
    SELECT SUM(p.price * ol.quantity) AS total_sales
    FROM order_lists ol
    JOIN products p ON ol.id_P = p.id_P
");
$total_sales_row = mysqli_fetch_assoc($total_sales_result);
$total_sales = $total_sales_row['total_sales'];

mysqli_close($conn);
?>

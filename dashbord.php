<?php include "conn.php"; ?>
<?php

$products = [];
$result = mysqli_query($conn, "SELECT * FROM products");
if (mysqli_num_rows($result) > 0) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
$count_result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM products");
$count_row = mysqli_fetch_assoc($count_result);
$total_products = $count_row['total'];


$users = [];
$result2 = mysqli_query($conn, "SELECT * FROM users");
if (mysqli_num_rows($result2) > 0) {
    $users = mysqli_fetch_all($result2, MYSQLI_ASSOC);
}
$count_res = mysqli_query($conn, "SELECT COUNT(*) AS total FROM users");
$count_row2 = mysqli_fetch_assoc($count_res);
$total_users = $count_row2['total'];

mysqli_close($conn);
?>

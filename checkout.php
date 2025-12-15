<?php
session_start();
include "conn.php";

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header("Location: mycart.php");
    exit;
}


$total = 0;
foreach ($_SESSION['cart'] as $product_id => $qty) {
    $res = $conn->query("SELECT price FROM products WHERE id_P='$product_id'");
    if ($row = $res->fetch_assoc()) {
        $total += $row['price'] * $qty;
    }
}


if (isset($_POST['confirm'])) {

    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $address = $_POST['address'];

    $order_id = 'O' . uniqid();

   
    $conn->query("
        INSERT INTO orders (id_O, history, id_U, guest_email, guest_phone, guest_address)
        VALUES ('$order_id', NOW(), NULL, '$email', '$phone', '$address')
    ");

    
    foreach ($_SESSION['cart'] as $product_id => $qty) {
        $id_ol = 'OL' . uniqid();
        $conn->query("
            INSERT INTO order_lists (id_OL, id_O, id_P)
            VALUES ('$id_ol', '$order_id', '$product_id')
        ");
    }

    $_SESSION['cart'] = [];
    echo "<script>alert('Order completed successfully'); location='index.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guest Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Guest Checkout</h5>
                </div>
                <div class="card-body">

                    <p class="fw-bold">Total: <?= number_format($total,2) ?> $</p>

                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea name="address" class="form-control" rows="3" required></textarea>
                        </div>

                        <button type="submit" name="confirm" class="btn btn-success w-100">
                            Confirm Order
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

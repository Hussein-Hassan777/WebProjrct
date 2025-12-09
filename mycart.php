<?php
session_start();


if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}
$cart = $_SESSION['cart'];


$total = 0;


$conn = new mysqli("localhost", "root", "", "ecommerce_db");
if($conn->connect_error) die("Connection failed: " . $conn->connect_error);


$cart_items = [];
if(!empty($cart)){
    foreach($cart as $product_id => $quantity){
        $sql = "SELECT * FROM products WHERE id_P = '$product_id'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $product = $result->fetch_assoc();
            $product['quantity'] = $quantity;
            $cart_items[] = $product;
            $total += $product['price'] * $quantity;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="shortcut icon" href="images/icons/nmt2ien6snbvvd91bedf19i52s.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/mycart_style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/icons/nmt2ien6snbvvd91bedf19i52s.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Discount</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Best Sells</a>
                    </li>
                </ul>
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-cart-arrow-down"></i>
                    mycart
                </a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
    <h2 class="text-center mb-4">MY CART</h2>

    <div class="row">
        <div class="col-lg-8">
            <?php if(!empty($cart_items)): ?>
                <?php foreach($cart_items as $item): ?>
                <div class="cart-item d-flex mb-3 p-3 border">
                    <img src="<?= $item['image_1'] ?? 'images/product1.jpg' ?>" class="item-img" style="width:100px; height:100px; object-fit:cover;">

                    <div class="ms-3 flex-grow-1">
                        <h5 class="item-title"><?= $item['name'] ?></h5>
                        <p class="item-price">$<?= number_format($item['price'], 2) ?></p>

                        <div class="d-flex align-items-center gap-2">
                            <button class="qty-btn">-</button>
                            <span class="qty-value"><?= $item['quantity'] ?></span>
                            <button class="qty-btn">+</button>
                        </div>

                        <button class="remove-btn btn btn-sm btn-danger mt-2">Remove</button>
                        <button class="make-info-btn btn btn-sm btn-secondary mt-2">Make Info</button>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Your cart is empty.</p>
            <?php endif; ?>
        </div>

        <div class="col-lg-4">
            <div class="summary-box p-3 border">
                <h4 class="mb-3">Order Summary</h4>

                <div class="d-flex justify-content-between mb-2">
                    <span>Subtotal</span>
                    <span>$<?= number_format($total, 2) ?></span>
                </div>

                <div class="d-flex justify-content-between mb-2">
                    <span>Shipping</span>
                    <span>$5.00</span>
                </div>

                <hr>

                <div class="d-flex justify-content-between">
                    <strong>Total</strong>
                    <strong>$<?= number_format($total + 5, 2) ?></strong>
                </div>

                <button class="checkout-btn btn btn-primary mt-4 w-100">Proceed to Checkout</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>


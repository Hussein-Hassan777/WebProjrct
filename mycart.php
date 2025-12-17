<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
$cart = $_SESSION['cart'];
$total = 0;
$conn = mysqli_connect("localhost:3307", "root", "", "ecommerce_db");
$cart_items = [];
if (!empty($cart)) {
    foreach ($cart as $product_id => $quantity) {
        $query = "SELECT p.*, i.image_1 FROM products p 
                LEFT JOIN images i ON p.id_P = i.id_P
                WHERE p.id_P = '$product_id'";
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
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
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/all.min.css">
    <link rel="stylesheet" href="styles/mycart_style.css">
    <link rel="shortcut icon" href="images/icons/logo.png" type="image/x-icon">
    <title>My Cart</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="mycart.php">
                <img src="images/icons/logo.png" alt="" width="50" height="50" class="rounded-5">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container ">
        <h1 class="text-center">
            MY CART
        </h1>
        <div class="row">
            <div class="col-lg-8">
                <?php if (!empty($cart_items)): ?>
                    <?php foreach ($cart_items as $item): ?>
                        <div class="cart-item ">
                            <img src="<?= $item['image_1'] ?? 'images/product1.jpg' ?>" class="item-img"
                                style="width:100px; height:100px; object-fit:cover;">
                            <div>
                                <h5 class="item-title"><?= $item['name'] ?></h5>
                                <p class="item-price">$<?= number_format($item['price'], 2) ?></p>
                                <div>
                                    <form action="cartBack.php" method="post" style="display:inline;">
                                        <input type="hidden" name="decrease" value="<?= $item['id_P'] ?>">
                                        <button type="submit" class="qty-btn ">-</button>
                                    </form>
                                    <span class="qty-value"><?= $item['quantity'] ?></span>
                                    <form action="cartBack.php" method="post" style="display:inline;">
                                        <input type="hidden" name="increase" value="<?= $item['id_P'] ?>">
                                        <button type="submit" class="qty-btn ">+</button>
                                    </form>
                                </div>
                                <form action="cartBack.php" method="post">
                                    <button class="remove-btn" name="remove" value="<?= $item['id_P'] ?>">Remove</button>
                                </form>
                                <form action="info.php" method="post">
                                    <button type="submit" name="info" value="<?= $item['id_P'] ?>" class="make-info-btn ">
                                        Make Info
                                    </button>
                                </form>
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
                    <form action="checkout.php" method="post">
                        <button type="submit" class="checkout-btn ">Proceed to
                            Checkout</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div id="about" class="about">
        <p class="about_text">
        <h4>We're Always Here To Help</h4>
        <p>Reach out to us through any of these support channels</p>
        <div class="mb-3">
            <a href="https://facebook.com"><i class="fa-brands fa-facebook social-icon"></i></a>
            <a href="https://instagram.com"><i class="fa-brands fa-instagram social-icon"></i></a>
            <a href="https://X.com"><i class="fa-brands fa-x-twitter social-icon"></i></a>
        </div>
        <img src="images/icons/logo.png" alt="">
        <i class="fa-regular fa-copyright"></i>
        2025 Shopping. All Rights Reserved
    </div>
    <script src="scripts/bootstrap.bundle.min.js"></script>
    <script src="scripts/all.min.js"></script>
</body>

</html>

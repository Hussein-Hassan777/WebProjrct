<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
$cart = $_SESSION['cart'];
$total = 0;
$conn = mysqli_connect("localhost:3306", "root", "", "ecommerce_db");
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
    <link rel="stylesheet" href="styles/style.css">
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
<style>
    body {
        font-family: sans-serif;
        padding-top: 80px;

    }

    .navbar {
        background-color: #1581BF !important;
    }

    .navbar a {
        color: #fff !important;
    }

    .navbar a:hover {
        color: #3DB6B1 !important;
    }

    .navbar a img {
        height: 50px;
        width: 50px;
    }

    .nav-link svg {
        font-size: 20px;
        right: 0;
    }

    body::selection {
        background-color: #F6B1CE;
        color: #fff;
    }

    .cart-item {
        width: 70%;
        margin: 20px auto;
        padding: 15px;
        background: #fff;
        border-radius: 45px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        display: flex;
        gap: 20px;
        transition: .3s;
    }

    .cart-item:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);

    }

    .summary-box {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        transition: .3s;
    }

    .summary-box:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);

    }



    .checkout-btn {
        width: 100%;
        padding: 12px;
        background-color: #3DB6B1;
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        margin-top: 20px;
        transition: 0.3s;
    }

    .checkout-btn:hover {
        background-color: #F6B1CE;
        transform: scale(1.05);

    }

    .remove-btn {
        width: 90%;
        padding: 12px;
        background-color: #3DB6B1;
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        margin-top: 20px;
        transition: 0.3s;

    }

    .remove-btn:hover {
        background-color: #F6B1CE;
        transform: scale(1.05);

    }

    .make-info-btn {
        width: 90%;
        padding: 12px;
        background-color: #3DB6B1;
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        margin-top: 20px;
        transition: all 0.3s;

    }

    .make-info-btn:hover {
        background-color: #F6B1CE;
        transform: scale(1.05);

    }

    .qty-btn {
        width: 35px;
        height: 35px;
        border: none;
        background-color: #3DB6B1;
        color: white;
        font-weight: bold;
        font-size: 18px;
        border-radius: 6px;
        transition: 0.3s;
    }

    .qty-btn:hover {
        background-color: #F6B1CE;
        transform: scale(1.05);
    }

    .qty-btn:disabled {
        background-color: #a0c8c5;
        transform: none;
    }

    .text-center {
        font-size: 45px;
        font-weight: 700;
        letter-spacing: 3px;
        color: #333;
        border-bottom: 3px solid #ff6600;
        padding-bottom: 10px;
        margin-top: 5px;
    }

    .about {
        background-color: #1581BF;
        padding: 10px;
    }

    .about_text {
        color: #fff;
        font-weight: bold;
    }

    .about img {
        height: 35px;
        width: 35px;
        border-radius: 50%;
    }

    .about .social-icon {
        font-size: 20px;
        color: #fff;
    }
</style>
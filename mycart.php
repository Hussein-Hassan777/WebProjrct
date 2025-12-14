<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
$cart = $_SESSION['cart'];
$total = 0;
$conn = new mysqli("localhost:3307", "root", "", "ecommerce_db");
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
$cart_items = [];
if (!empty($cart)) {
    foreach ($cart as $product_id => $quantity) {
        $sql = "SELECT p.*, i.image_1 FROM products p 
                LEFT JOIN images i ON p.id_P = i.id_P
                WHERE p.id_P = '$product_id'";
        $result = $conn->query($sql);
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
    <title>My Cart</title>
    <link rel="shortcut icon" href="images/icons/nmt2ien6snbvvd91bedf19i52s.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/mycart_style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/icons/logo.png" alt="" width="50" height="50" class="rounded-5">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">about us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            pages
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-center" href="#">news</a></li>
                            <li><a class="dropdown-item text-center" href="#">latest products</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-center" href="login.php">login</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#bestselling">bestselling</a>
                    </li>
                </ul>

                <!-- cart link fixed -->
                <a class="nav-link text-white d-flex align-items-center" href="mycart.php">
                    <i class="fa-solid fa-cart-arrow-down me-1"></i>
                    <span>My Cart</span>
                </a>

            </div>
        </div>
    </nav>
    </nav>
    <div class="container py-5">
        <h1 class="text-center" style="
    font-size: 45px;
        font-weight: 700;
        letter-spacing: 3px;
        color: #333;
        text-transform: uppercase;
        border-bottom: 3px solid #ff6600;
        padding-bottom: 10px;
        margin-top: 5px;
">
            MY CART
        </h1>
        <div class="row">
            <div class="col-lg-8">
                <?php if (!empty($cart_items)): ?>
                    <?php foreach ($cart_items as $item): ?>
                        <div class="cart-item d-flex mb-3 p-3 border">
                            <img src="<?= $item['image_1'] ?? 'images/product1.jpg' ?>" class="item-img"
                                style="width:100px; height:100px; object-fit:cover;">
                            <div class="ms-3 flex-grow-1">
                                <h5 class="item-title"><?= $item['name'] ?></h5>
                                <p class="item-price">$<?= number_format($item['price'], 2) ?></p>
                                <div class="d-flex align-items-center gap-2">
                                    <form action="cartBack.php" method="post" style="display:inline;">
                                        <input type="hidden" name="decrease" value="<?= $item['id_P'] ?>">
                                        <button type="submit" class="qty-btn btn btn-sm btn-secondary">-</button>
                                    </form>
                                    <span class="qty-value"><?= $item['quantity'] ?></span>
                                    <form action="cartBack.php" method="post" style="display:inline;">
                                        <input type="hidden" name="increase" value="<?= $item['id_P'] ?>">
                                        <button type="submit" class="qty-btn btn btn-sm btn-secondary">+</button>
                                    </form>
                                </div>
                                <form action="cartBack.php" method="post" class="d-inline">
                                    <button class="remove-btn btn btn-sm btn-danger mt-2" name="remove"
                                        value="<?= $item['id_P'] ?>">Remove</button>
                                </form>
                                <form action="info.php" method="post" class="d-inline">
                                    <button type="submit" name="info" value="<?= $item['id_P'] ?>"
                                        class="make-info-btn btn btn-sm btn-secondary mt-2">
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
                        <button type="submit" class="checkout-btn btn btn-primary mt-4 w-100">Proceed to
                            Checkout</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
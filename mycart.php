<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="cart.css">
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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

                <div class="cart-item d-flex mb-3 p-3">
                    <img src="images/product1.jpg" class="item-img">

                    <div class="ms-3 flex-grow-1">
                        <h5 class="item-title">Product Name</h5>
                        <p class="item-price">$25.00</p>

                        <div class="d-flex align-items-center gap-2">
                            <button class="qty-btn">-</button>
                            <span class="qty-value">1</span>
                            <button class="qty-btn">+</button>
                        </div>

                       <button class="remove-btn">Remove</button>
                        <button class="make-info-btn">Make Info</button>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="summary-box p-3">

                    <h4 class="mb-3">Order Summary</h4>

                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span>$25.00</span>
                    </div>

                    <div class="d-flex justify-content-between mb-2">
                        <span>Shipping</span>
                        <span>$5.00</span>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between">
                        <strong>Total</strong>
                        <strong>$30.00</strong>
                    </div>

                    <button class="checkout-btn mt-4">Proceed to Checkout</button>

                </div>
            </div>

        </div>
    </div>

</body>
</html>
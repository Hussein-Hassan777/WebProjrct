<?php
session_start();
include("index_backend.php");
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
    <title>My Market</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                            <?php if (!isset($_SESSION['id_U'])): ?>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item text-center" href="login.php">login</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="#bestselling">bestselling</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='mycart.php'>
                            <div class=" text-white">
                                <i class="fa-solid fa-cart-arrow-down"></i>
                                <span>cart</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <?php if (isset($_SESSION['id_U'])): ?>
                    <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        <div class="text-white">
                            <div class="icon">
                                <span><?= $_SESSION['first_name'] ?></span>
                                <span class="me-2"><?= $_SESSION['last_name'] ?></span>
                                <img src="<?= $_SESSION['profile_img'] ?>" alt="">
                            </div>
                        </div>
                    </a>
                <?php else: ?>
                    <a class="nav-link" href='login.php'>
                        <div class="text-white">
                            <span>login</span>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- offconvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <button type="button" class="btn-close ms-auto p-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <div class="offcanvas-header">
            <h5 class="offcanvas-title w-100 text-center" id="offcanvasExampleLabel">Person Info</h5>
        </div>
        <div class="offcanvas-body">
            <div class="person_info">
                <p class="img  text-center">
                    <img src="<?= $_SESSION['profile_img'] ?>" alt="">
                </p>
                <p class="name">
                    <span class="identfier">Name: </span>
                    <span><?= $_SESSION['first_name'] ?></span>
                    <span><?= $_SESSION['last_name'] ?></span>
                </p>
                <p class="email">
                    <span class="identfier">Email: </span>
                    <span><?= $_SESSION['email'] ?></span>
                </p>
                <p class="phone">
                    <span class="identfier">Phone Number: </span>
                    <span><?= $_SESSION['phone'] ?></span>
                </p>
            </div>
            <div class="edit">
                <button class="edit_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
            </div>
        </div>
    </div>
    <!-- model -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">User Authentication</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="edit_info.php" method="post">
                    <div class="modal-body d-flex justify-content-between align-items-center">
                        <div class="modeltext">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="infobtn" value="submit">authenticate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/landscaps/img1.avif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block rounded-5">
                    <h2>Your Welfare Matters</h2>
                    <p>The Best Marketing Website...Priced in Your Local Currency</p>
                    <?php if (!isset($_SESSION['id_U'])): ?>
                        <button class="mybtn1" onclick="window.location.href='login.php'">Login!</button>
                        <button class="mybtn1" onclick="window.location.href='register.php'">register Now!</button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/landscaps/img2.avif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block rounded-5 text-center">
                    <h2>The quality is our goal</h2>
                    <p>All what you need and more will reach your place</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/landscaps/img3.avif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block rounded-5">
                    <h2>Your confortance is our goal</h2>
                    <p>Daily discounts make you get what you'd like</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <i class="fa-solid fa-angles-left arrow"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <i class="fa-solid fa-angles-right arrow"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- products -->
    <section id="products" class="text-center m-5">
        <div class="d-flex justify-content-center">
            <h2 class="text-header">products</h2>
        </div>
        <div class="buttons">
            <button>all</button>
            <button>the best sells</button>
            <button>specifications</button>
            <button>the newest</button>
            <button>discounts</button>
        </div>
        <div class="container">
            <div class="d-flex justify-content-evenly flex-wrap gap-4">
                <?php for ($i = 0; $i < count($rows); $i++): ?>
                    <div class="card m-2" style="width: 15rem;">
                        <div id="carouselExample<?= $i ?>" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= $rows[$i]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= $rows[$i]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= $rows[$i]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample<?= $i ?>"
                                data-bs-slide="prev">
                                <i class="fa-solid fa-angles-left card_arrows"></i>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample<?= $i ?>"
                                data-bs-slide="next">
                                <i class="fa-solid fa-angles-right card_arrows"></i>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <div class="card-body">
                            <div class="stars">
                                <?php for ($s = 0; $s < 5; $s++): ?>
                                    <span class="star"><i class="fa-solid fa-star"></i></span>
                                <?php endfor; ?>
                            </div>
                            <h5 class="card-title bgBlue"><?= $rows[$i]['name'] ?></h5>
                            <p class="card-text fw-bold fs-4"><?= $rows[$i]['price'] ?> EGP</p>
                        </div>
                        <form action="info.php" method="post">
                            <button class="cardbtn cardbtninfo" name="info" value="<?= $rows[$i]['id_P'] ?>">more
                                info</button>
                        </form>
                        <form action="cartBack.php" method="post">
                            <button class="cardbtn cardbtncart" name="cart" value="<?= $rows[$i]['id_P'] ?>">
                                add to cart <i class="fa-solid fa-cart-arrow-down"></i>
                            </button>
                        </form>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </section>
    <!-- contact -->
    <section id="contactus" class="contact">
        <div class="d-flex justify-content-center">
            <h3>Contact us</h3>
        </div>
        <p>Feel free to reach out to us anytime. Whether you have a question, need support, or want to know more
            about
            our services, our team is here to help. Just send us a message and we'll get back to you as soon as
            possible.</p>
        <div class="input-group mygroup w-50 m-auto">
            <button type="button" id="button-addon1" class="btncontact">Join us</button>
            <input type="text" class="form-control inputcontact" placeholder="Type our Email"
                aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>
    </section>
    <!-- Order -->
    <section id="order" class="order border rounded m-5">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h2>Special Order</h2>
            </div>
            <form method="post" class="form_order">
                <div class="row">
                    <div class="col">
                        <label for="name">Name</label>
                        <br>
                        <input type="text" id="name" name="name" placeholder="type your name" class="w-100" required>
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <br>
                        <input type="email" id="email" name="email" placeholder="type your email" class="w-100"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="phone">Phone Number</label>
                        <br>
                        <input type="text" id="phone" name="phone" placeholder="type your phone number" class="w-100"
                            required>
                    </div>
                    <div class="col">
                        <label for="title">message title</label>
                        <br>
                        <input type="text" id="title" name="title" placeholder="type the message title" class="w-100"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="details">the order details</label>
                        <br>
                        <textarea id="details" name="details" placeholder="type the order details" class="w-100"
                            rows="5" required></textarea>
                    </div>
                </div>
                <button type="submit" name="submit" value="submit" class="d-block m-auto">Order</button>
            </form>
        </div>
    </section>
    <!-- bestselling -->
    <section class="bestselling" id="bestselling">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h2>The Best Selling</h2>
            </div>
            <div class="row p-3">
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <h5>the most Selling</h5>
                    <div class="py-3 d-flex flex-column gap-5">
                        <?php for ($k = 0; $k < count($rows2); $k++): ?>
                            <div class="d-flex align-items-center">
                                <div class="w-25">
                                    <img src="<?= $rows2[$k]['image_1'] ?>" alt="" class="img-thumbnail">
                                </div>
                                <div class="ms-2">
                                    <p><?php echo $rows2[$k]['name'] ?></p>
                                    <p class="bestsellingprice"><?= $rows2[$k]['price'] ?> EGP</p>
                                    <form action="info.php" method="post" style="display: inline;">
                                        <button class="bestsellingbtn info" name="info"
                                            value="<?= $rows2[$k]['id_P'] ?>">more info</button>
                                    </form>
                                    <form action="cartBack.php" method="post" style="display: inline;">
                                        <button class="bestsellingbtn cart" name="cart"
                                            value="<?= $rows2[$k]['id_P'] ?>">add
                                            to cart</button>
                                    </form>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>


                <div class="col-lg-4 col-md-8 col-sm-12">
                    <h5>the most rating </h5>
                    <div class="py-3 d-flex flex-column gap-5">

                        <?php for ($m = 0; $m < count($rows3); $m++): ?>
                            <div class="d-flex align-items-center">
                                <div class="w-25">
                                    <img src="<?= $rows3[$m]['image_1'] ?>" alt="" class="img-thumbnail">
                                </div>
                                <div class="ms-2">
                                    <p><?= $rows3[$m]['name'] ?></p>
                                    <p class="bestsellingprice"><?= $rows3[$m]['price'] ?> EGP</p>
                                    <form action="info.php" method="post" style="display: inline;">
                                        <button class="bestsellingbtn info" name="info"
                                            value="<?= $rows3[$m]['id_P'] ?>">more info</button>
                                    </form>
                                    <form action="cartBack.php" method="post" style="display: inline;">
                                        <button class="bestsellingbtn cart" name="cart"
                                            value="<?= $rows3[$m]['id_P'] ?>">add
                                            to cart</button>
                                    </form>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 col-sm-12">
                    <h5>offers</h5>
                    <div class="py-3 d-flex flex-column gap-5">
                        <?php for ($n = 0; $n < count($rows4); $n++): ?>
                            <div class="d-flex align-items-center">
                                <div class="w-25">
                                    <img src="<?= $rows4[$n]['image_1'] ?>" alt="" class="img-thumbnail">
                                </div>
                                <div class="ms-2">
                                    <p><?= $rows4[$n]['name'] ?></p>
                                    <p class="bestsellingprice"><?= $rows4[$n]['price'] ?> EGP</p>
                                    <form action="info.php" method="post" style="display: inline;">
                                        <button class="bestsellingbtn info" name="info"
                                            value="<?= $rows4[$n]['id_P'] ?>">more info</button>
                                    </form>
                                    <form action="cartBack.php" method="post" style="display: inline;">
                                        <button class="bestsellingbtn cart" name="cart"
                                            value="<?= $rows4[$n]['id_P'] ?>">add
                                            to cart</button>
                                    </form>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!-- about -->
    <div id="about" class="about">
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
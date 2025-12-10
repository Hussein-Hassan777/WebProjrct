<?php
include("myfile_backend.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>My Market</title>
    <link rel="icon" href="images/icons/logo.png">
</head>

<body>
    <?php
    $mying = mysqli_fetch_array($result)[3];
    ?>
    <!-- navbar -->
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
                        <a class="nav-link" href="#">about us</a>
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
                            <li><a class="dropdown-item text-center" href="#"
                                    onclick="window.location.href='login.php'">login</a></li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="#">categories</a>
                    </li>
                    </li>
                </ul>

                <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                    aria-controls="offcanvasExample" onclick="window.location.href='mycart.php'">
                    <div class="text-white">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                        <span>cart</span>
                    </div>
                </a>
            </div>
        </div>
    </nav>
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
                    <button class="mybtn1" onclick="window.location.href='login.php'">Login Now!</button>
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
        <div>
            <div class="container">
                <div class="d-flex justify-content-evenly flex-wrap">
                    <div class="card m-2" style="width: 12rem;">
                        <img src="<?php echo $mying ?>" class="card-img-top p-2" alt="..." height="230"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card-body">
                            <div class="stars">
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h5 class="card-title bgBlue">Sumsung A20</h5>
                            <p class="card-text fw-bold fs-4">70$</p>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 12rem;">
                        <img src="<?php echo $mying ?>" class="card-img-top p-2" alt="..." height="230">
                        <div class="card-body">
                            <div class="stars">
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h5 class="card-title bgBlue">Sumsung A20</h5>
                            <p class="card-text fw-bold fs-4">70$</p>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 12rem;">
                        <img src="" class="card-img-top p-2" alt="..." height="230">
                        <div class="card-body">
                            <div class="stars">
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h5 class="card-title bgBlue">Sumsung A20</h5>
                            <p class="card-text fw-bold fs-4">70$</p>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 12rem;">
                        <img src="" class="card-img-top p-2" alt="..." height="230">
                        <div class="card-body">
                            <div class="stars">
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h5 class="card-title bgBlue">Sumsung A20</h5>
                            <p class="card-text fw-bold fs-4">70$</p>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 12rem;">
                        <img src="" class="card-img-top p-2" alt="..." height="230">
                        <div class="card-body">
                            <div class="stars">
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h5 class="card-title bgBlue">Sumsung A20</h5>
                            <p class="card-text fw-bold fs-4">70$</p>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 12rem;">
                        <img src="" class="card-img-top p-2" alt="..." height="230">
                        <div class="card-body">
                            <div class="stars">
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h5 class="card-title bgBlue">Sumsung A20</h5>
                            <p class="card-text fw-bold fs-4">70$</p>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 12rem;">
                        <img src="" class="card-img-top p-2" alt="..." height="230">
                        <div class="card-body">
                            <div class="stars">
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h5 class="card-title bgBlue">Sumsung A20</h5>
                            <p class="card-text fw-bold fs-4">70$</p>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 12rem;">
                        <img src="" class="card-img-top p-2" alt="..." height="230">
                        <div class="card-body">
                            <div class="stars">
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h5 class="card-title bgBlue">Sumsung A20</h5>
                            <p class="card-text fw-bold fs-4">70$</p>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 12rem;">
                        <img src="" class="card-img-top p-2" alt="..." height="230">
                        <div class="card-body">
                            <div class="stars">
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h5 class="card-title bgBlue">Sumsung A20</h5>
                            <p class="card-text fw-bold fs-4">70$</p>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 12rem;">
                        <img src="" class="card-img-top p-2" alt="..." height="230">
                        <div class="card-body">
                            <div class="stars">
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                <span class="star"><i class="fa-solid fa-star"></i></span>
                            </div>
                            <h5 class="card-title bgBlue">Sumsung A20</h5>
                            <p class="card-text fw-bold fs-4">70$</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section id="contactus" class="contact">
        <div class="d-flex justify-content-center">
            <h3>Contact us</h3>
        </div>
        <p>Feel free to reach out to us anytime. Whether you have a question, need support, or want to know more about
            our services, our team is here to help. Just send us a message and we'll get back to you as soon as
            possible.</p>
        <div class="input-group mygroup w-50 m-auto">
            <button type="button" id="button-addon1" class="btncontact">Join us</button>
            <input type="text" class="form-control inputcontact" placeholder="Type our Email"
                aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>
    </section>

    <!-- offconvas -->
    <!-- <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body text-center">

        <div class="text-center">
            <img src="images/products/31dBV4g+CwL.AC_SX250.jpg" class="img-thumbnail offcan-img p-2" alt=""
                data-bs-toggle="modal" data-bs-target="#exampleModal">
            <p>Shirt Polo</p>
            <b>60$</b>
        </div>
        <hr>
        <div class="text-center">
            <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" class="img-thumbnail offcan-img p-2" alt="">
            <p>Shirt Polo</p>
            <b>120$</b>
        </div>
        <hr>
        <div class="text-center">
            <img src="images/products/31qMhWXKcML.AC_SX250.jpg" class="img-thumbnail offcan-img p-2" alt="">
            <p>Shirt Polo</p>
            <b>70$</b>
        </div>
        <hr>
        <div class="text-center">
            <img src="images/products/31rACt0uWKL.AC_SX250.jpg" class="img-thumbnail offcan-img p-2" alt="">
            <p>Shirt Polo</p>
            <b>90$</b>
        </div>
        <hr>
        <h5 class="offcan-header">the total: 180$</h5>
        <button class="mybtn1">Paying</button>
    </div>
</div> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Product info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-between align-items-center">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/products/41IIZy5ZLNL.AC_SX250.jpg" class="d-block img-thumbnail"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/products/41i8tGsm1BL.AC_SX250.jpg" class="d-block img-thumbnail"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/products/41j9BM7NjGL.AC_SX250.jpg" class="d-block img-thumbnail"
                                    alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="modeltext">
                        <h4>SAMSUNG Galaxy Z Fold6</h4>
                        <p>SAMSUNG Galaxy Z Fold6, AI Phone, 12GB RAM, 512GB Storage, Silver Shadow, Android Smartphone,
                            50MP Camera, Big Screen, Multi-tasking, S Pen, Long Battery Life, UAE Version</p>
                        <p>price: <b style="color: crimson;">70$</b></p>
                        <button class="cardbtn">add to cart <i class="fa-solid fa-cart-arrow-down"></i></button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="infobtn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Order -->
    <section id="order" class="order  border rounded m-5">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h2>Special Order</h2>
            </div>
            <form action="" class="form_order">
                <div class="row">
                    <div class="col">
                        <label for="name">Name</label>
                        <br>
                        <input type="text" id="name" name="name" placeholder="type your name" class="w-100">
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <br>
                        <input type="email" id="email" name="email" placeholder="type your email" class="w-100">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="phone">Phone Number</label>
                        <br>
                        <input type="text" id="phone" name="phone" placeholder="type your phone number" class="w-100">
                    </div>
                    <div class="col">
                        <label for="title">message title</label>
                        <br>
                        <input type="text" id="title" name="title" placeholder="type the message title" class="w-100">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="details">the order details</label>
                        <br>
                        <textarea id="details" name="details" placeholder="type the order details" class="w-100"
                            rows="5"></textarea>
                    </div>
                </div>
                <button type="submit" class="d-block m-auto">Send</button>
            </form>
        </div>
    </section>

    <!-- bestselling -->
    <section class="bestselling">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h2>The Best Selling</h2>
            </div>

            <div class="row p-3">
                <div class="col">
                    <h5>the most rating</h5>
                    <div class="py-3 d-flex flex-column gap-5">
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h5>the most Selling</h5>
                    <div class="py-3 d-flex flex-column gap-5">
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h5>offers</h5>
                    <div class="py-3 d-flex flex-column gap-5">
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/products/31G2V3hbnZL.AC_SX250.jpg" alt="" class="img-thumbnail">
                            </div>
                            <div class="text-center">
                                <p>Sumsung A30</p>
                                <p>1300$</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>

    <script src="scripts/bootstrap.bundle.min.js"></script>
    <script src="scripts/all.min.js"></script>
</body>

</html>
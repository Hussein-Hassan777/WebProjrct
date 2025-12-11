<?php
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
    <title>My Market</title>
    <link rel="icon" href="images/icons/logo.png">
</head>

<body>
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
                            <li><a class="dropdown-item text-center" href="#"
                                    onclick="window.location.href='login.php'">login</a></li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="#bestselling">bestselling</a>
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
                    <button class="mybtn1" onclick="window.location.href='login.php'">Login!</button>
                    <button class="mybtn1" onclick="window.location.href='register.php'">register Now!</button>
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

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample0" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[0]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[0]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[0]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample0"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample0"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[0]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[0]['price'] ?>EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[0]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[0]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample1" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[1]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[1]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[1]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[1]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[1]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[1]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[1]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample2" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[2]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[2]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[2]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[2]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[2]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[2]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[2]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample3" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[3]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[3]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[3]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[3]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[3]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[3]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[3]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample4" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[4]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[4]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[4]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample4"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample4"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[4]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[4]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[4]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[4]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample5" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[5]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[5]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[5]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample5"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample5"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[5]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[5]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[5]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[5]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample6" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[6]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[6]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[6]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample6"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample6"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[6]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[6]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[6]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[6]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample7" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[7]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[7]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[7]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample7"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample7"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[7]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[7]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[7]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[7]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample8" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[8]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[8]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[8]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample8"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample8"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[8]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[8]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[8]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[8]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample9" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[9]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[9]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[9]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample9"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample9"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[9]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[9]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[9]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[9]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample10" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[10]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[10]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[10]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample10"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample10"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[10]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[10]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[10]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[10]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample11" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[11]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[11]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[11]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample11"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample11"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[11]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[11]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[11]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[11]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample12" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[12]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[12]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[12]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample12"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample12"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[12]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[12]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[12]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[12]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample13" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[13]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[13]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[13]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample13"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample13"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[13]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[13]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[13]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[13]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
                </div>

                <div class="card m-2" style="width: 15rem;">
                    <div id="carouselExample14" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $rows[14]['image_1'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[14]['image_2'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo $rows[14]['image_3'] ?>" class="d-block img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample14"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angles-left card_arrows"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample14"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angles-right card_arrows"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="stars">
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                            <span class="star"><i class="fa-solid fa-star"></i></span>
                        </div>
                        <h5 class="card-title bgBlue"><?php echo $rows[14]['name'] ?></h5>
                        <p class="card-text fw-bold fs-4"><?php echo $rows[14]['price'] ?> EGP</p>
                    </div>
                    <form action="info.php" method="post">
                        <button class="cardbtn cardbtninfo" name="info" value="<?php echo $rows[14]['id_P'] ?>">more
                            info</button>
                    </form>
                    <form action="mycart_backend.php" method="post">
                        <button class="cardbtn cardbtncart" name="cart" value="<?php echo $rows[14]['id_P'] ?>">add to
                            cart<i class="fa-solid fa-cart-arrow-down"></i></button>
                    </form>
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

    <!-- Order -->
    <section id="order" class="order  border rounded m-5">
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
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="<?php echo $rows2[0]['image_1'] ?>" alt="" class="img-thumbnail">
                            </div>
                            <div class="ms-2">
                                <p><?php echo $rows2[0]['name'] ?></p>
                                <p class="bestsellingprice"><?php echo $rows2[0]['price'] ?> EGP</p>
                                <form action="info.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn info" name="info"
                                        value="<?php echo $rows2[0]['id_P'] ?>">more info</button>
                                </form>
                                <form action="mycart_backend.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn cart" name="cart"
                                        value="<?php echo $rows2[0]['id_P'] ?>">add
                                        to cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="<?php echo $rows2[1]['image_1'] ?>" alt="" class="img-thumbnail">
                            </div>
                            <div class="ms-2">
                                <p><?php echo $rows2[1]['name'] ?></p>
                                <p class="bestsellingprice"><?php echo $rows2[1]['price'] ?> EGP</p>
                                <form action="info.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn info" name="info"
                                        value="<?php echo $rows2[1]['id_P'] ?>">more info</button>
                                </form>
                                <form action="mycart_backend.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn cart" name="cart"
                                        value="<?php echo $rows2[1]['id_P'] ?>">add
                                        to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <h5>the most rating </h5>
                    <div class="py-3 d-flex flex-column gap-5">
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="<?php echo $rows3[0]['image_1'] ?>" alt="" class="img-thumbnail">
                            </div>
                            <div class="ms-2">
                                <p><?php echo $rows3[0]['name'] ?></p>
                                <p class="bestsellingprice"><?php echo $rows3[0]['price'] ?> EGP</p>
                                <form action="info.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn info" name="info"
                                        value="<?php echo $rows3[0]['id_P'] ?>">more info</button>
                                </form>
                                <form action="mycart_backend.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn cart" name="cart"
                                        value="<?php echo $rows3[0]['id_P'] ?>">add
                                        to cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="<?php echo $rows3[1]['image_1'] ?>" alt="" class="img-thumbnail">
                            </div>
                            <div class="ms-2">
                                <p><?php echo $rows3[1]['name'] ?></p>
                                <p class="bestsellingprice"><?php echo $rows3[1]['price'] ?> EGP</p>
                                <form action="info.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn info" name="info"
                                        value="<?php echo $rows3[1]['id_P'] ?>">more info</button>
                                </form>
                                <form action="mycart_backend.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn cart" name="cart"
                                        value="<?php echo $rows3[1]['id_P'] ?>">add
                                        to cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="<?php echo $rows3[2]['image_1'] ?>" alt="" class="img-thumbnail">
                            </div>
                            <div class="ms-2">
                                <p><?php echo $rows3[2]['name'] ?></p>
                                <p class="bestsellingprice"><?php echo $rows3[2]['price'] ?> EGP</p>
                                <form action="info.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn info" name="info"
                                        value="<?php echo $rows3[2]['id_P'] ?>">more info</button>
                                </form>
                                <form action="mycart_backend.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn cart" name="cart"
                                        value="<?php echo $rows3[2]['id_P'] ?>">add
                                        to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <h5>offers</h5>
                    <div class="py-3 d-flex flex-column gap-5">
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="<?php echo $rows4[0]['image_1'] ?>" alt="" class="img-thumbnail">
                            </div>
                            <div class="ms-2">
                                <p><?php echo $rows4[0]['name'] ?></p>
                                <p class="bestsellingprice"><?php echo $rows4[0]['price'] ?> EGP</p>
                                <form action="info.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn info" name="info"
                                        value="<?php echo $rows4[0]['id_P'] ?>">more info</button>
                                </form>
                                <form action="mycart_backend.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn cart" name="cart"
                                        value="<?php echo $rows4[0]['id_P'] ?>">add
                                        to cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="<?php echo $rows4[1]['image_1'] ?>" alt="" class="img-thumbnail">
                            </div>
                            <div class="ms-2">
                                <p><?php echo $rows4[1]['name'] ?></p>
                                <p class="bestsellingprice"><?php echo $rows4[1]['price'] ?> EGP</p>
                                <form action="info.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn info" name="info"
                                        value="<?php echo $rows4[1]['id_P'] ?>">more info</button>
                                </form>
                                <form action="mycart_backend.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn cart" name="cart"
                                        value="<?php echo $rows4[1]['id_P'] ?>">add
                                        to cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="<?php echo $rows4[2]['image_1'] ?>" alt="" class="img-thumbnail">
                            </div>
                            <div class="ms-2">
                                <p><?php echo $rows4[2]['name'] ?></p>
                                <p class="bestsellingprice"><?php echo $rows4[2]['price'] ?> EGP</p>
                                <form action="info.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn info" name="info"
                                        value="<?php echo $rows4[2]['id_P'] ?>">more info</button>
                                </form>
                                <form action="mycart_backend.php" method="post" style="display: inline;">
                                    <button class="bestsellingbtn cart" name="cart"
                                        value="<?php echo $rows4[2]['id_P'] ?>">add
                                        to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>

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
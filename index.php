<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerece</title>
    <link rel="shortcut icon" href="images/icons/nmt2ien6snbvvd91bedf19i52s.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/all.min.css">
    <link rel="stylesheet" href="styles/home_style.css">
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
                        <a class="nav-link" href="#">products</a>
                    </li>
                   
                </ul>
                <a class="nav-link" href="#" onclick="window.location.href='mycart.php'">
                    <i class="fa-solid fa-cart-arrow-down"></i>
                    mycart
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <header>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active mybottonbtns" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2" class="mybottonbtns"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3" class="mybottonbtns"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/landscaps/3fcd7c08-8aac-4494-a16d-f636c819ecde.avif" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Log In to NOW!</h2>
                            <p>Sign in to stay connected, track your activity, and manage your services quickly and
                                securely.
                            </p>
                            <button onclick="window.location.href='login.php'">log in</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/landscaps/2509GB038_BAU_EG_SL_FashionWeek_L2_Herotators_desktop_1500x400_EN._CB799715468_.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Second slide label</h2>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/landscaps/c10814f6-67ed-4a3f-a4b2-48f80cd66bde.avif" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Third slide label</h2>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev myarrows" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <i class="fa-solid fa-angles-left"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next myarrows" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <i class="fa-solid fa-angles-right"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </header>
        <section>
            <div class="row justify-content-around">
                <div class="card col-lg-3 col-md-6 col-sm-1" style="width: 18rem;">
                    <img src="images\cards\card1\img1.avif" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h4 class="card-title">Oversized Drop-Shoulder T-Shirt</h4>
                        <h5 class="card-text"><span>1074.00$</span></h5>
                        <div>
                            <button class="inf_btn">more inf</button>
                        </div>
                        <div>
                            <button class="added_card_btn">add to card</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="scripts/all.min.js"></script>
        <script src="scripts/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
if (isset($_GET['id'])) {

    $conn = mysqli_connect("127.0.0.1", "root", "", "ecommerce_db", 3307);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = intval($_GET['id']);
    $sql = "SELECT * FROM products WHERE id_p = $id";
    $res = mysqli_query($conn, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        $product = mysqli_fetch_assoc($res);
    } else {
        die("Product not found");
    }

    $sql2 = "SELECT * FROM products WHERE id_p != $id LIMIT 4";
    $related = mysqli_query($conn, $sql2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $product['name']; ?></title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/all.min.css">
    <link rel="stylesheet" href="styles/home_style.css">
    <link rel="stylesheet" href="styles/info_style.css">
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
                   
                    mycart
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="product-box">
            <div class="left">
                <?php if(!empty($product['image'])): ?>
                    <img src="uploads/<?= $product['image']; ?>" alt="<?= $product['name']; ?>" style="width:100%; height:auto;">
                <?php else: ?>
                    <span>No Image</span>
                <?php endif; ?>
            </div>

            <div class="right">
                <h2><?= $product['name']; ?></h2>
                <p class="price">$<?= $product['price']; ?></p>
                <p><strong>Brand:</strong> <?= $product['brand']; ?></p>
                <p><strong>Category:</strong> <?= $product['category']; ?></p>
                <p class="desc"><?= $product['description']; ?></p>
                <button class="add-btn">Add to Cart</button>
            </div>
        </div>

        <h2 class="related-title">Similar Products</h2>
        <div class="related-grid">
            <?php
            if ($related && mysqli_num_rows($related) > 0) {
                while ($row = mysqli_fetch_assoc($related)) {
                    ?>
                    <div class="card">
                        <?php if(!empty($row['image'])): ?>
                            <img src="uploads/<?= $row['image']; ?>" alt="<?= $row['name']; ?>" style="width:100%; height:auto;">
                        <?php else: ?>
                            <span>No Image</span>
                        <?php endif; ?>
                        <h3><?= $row['name']; ?></h3>
                        <a href="info.php?id=<?= $row['id_p']; ?>" class="btn">More Info</a>
                        <a href="mycart.php?id=<?= $row['id_p']; ?>" class="btn">add to cart</a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</body>
</html>

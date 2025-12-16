<?php
session_start();
$conn = mysqli_connect("localhost:3307", "root", "", "ecommerce_db");
if (!$conn) {
    die(mysqli_connect_error());
}
if (isset($_POST['info'])) {
    $id = $_POST['info'];
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("No Product");
}
$id = mysqli_real_escape_string($conn, $id);
$productQuery = "
SELECT p.*, i.image_1, i.image_2, i.image_3
FROM products p
LEFT JOIN images i ON p.id_P = i.id_P
WHERE p.id_P = '$id'
";
$productResult = mysqli_query($conn, $productQuery);
if (!$productResult || mysqli_num_rows($productResult) == 0) {
    die("Product not found");
}
$product = mysqli_fetch_assoc($productResult);
$moreQuery = "
SELECT p.id_P, p.name, i.image_1
FROM products p
LEFT JOIN images i ON p.id_P = i.id_P
WHERE p.id_P != '$id'
LIMIT 4
";
$more = mysqli_query($conn, $moreQuery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($product['name']) ?></title>
    <link rel="stylesheet" href="styles/info_style.css">
</head>

<body>
    <div class="navbar">
        <a class="navbar-brand" href="index.php">
            <img src="images/icons/logo.png" alt="" width="50" height="50" class="rounded-5">
        </a>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="mycart.php">My Cart</a>
        </div>
    </div>
    <div class="container">
        <div class="product-details">
            <div class="product-image">
                <img id="sliderImg" src="<?= htmlspecialchars($product['image_1']) ?>"
                    data-img1="<?= htmlspecialchars($product['image_1']) ?>"
                    data-img2="<?= htmlspecialchars($product['image_2']) ?>"
                    data-img3="<?= htmlspecialchars($product['image_3']) ?>">
            </div>
            <div class="product-info">
                <h2><?= htmlspecialchars($product['name']) ?></h2>
                <p><strong>Description:</strong> <?= htmlspecialchars($product['describtion']) ?></p>
                <p><strong>Brand:</strong> <?= htmlspecialchars($product['brand']) ?></p>
                <p><strong>Category:</strong> <?= htmlspecialchars($product['category']) ?></p>
                <div class="price"><?= htmlspecialchars($product['price']) ?> EGP</div>
                <form method="post" action="cartBack.php">
                    <button type="submit" name="cart" value="<?= $product['id_P'] ?>" class="btn">
                        Add To Cart
                    </button>
                </form>
            </div>
        </div>
        <div class="more-products">
            <h3>More Products</h3>
            <div class="products-grid">
                <?php while ($row = mysqli_fetch_assoc($more)) { ?>
                    <div class="product-card">
                        <div class="img-box">
                            <img src="<?= htmlspecialchars($row['image_1']) ?>">
                        </div>
                        <p><?= htmlspecialchars($row['name']) ?></p>
                        <div class="card-buttons">
                            <a href="info.php?id=<?= $row['id_P'] ?>" class="btn">More Info</a>
                            <form method="post" action="cartBack.php">
                                <button type="submit" name="cart" value="<?= $row['id_P'] ?>" class="btn">
                                    Add
                                </button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p> 2025 Shopping. All Rights Reserved © 2025</p>
        <p>Simple E-Commerce Demo</p>
    </footer>
    <script>
        const img = document.getElementById("sliderImg");
        const images = [img.dataset.img1, img.dataset.img2, img.dataset.img3].filter(Boolean);
        let i = 0;
        setInterval(() => {
            i = (i + 1) % images.length;
            img.src = images[i];
        }, 2500);
    </script>
</body>

</html>
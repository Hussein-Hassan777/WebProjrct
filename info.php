<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "web_project_db", 3307);
if (!$conn) {
  die("DB Error");
}

if (!isset($_GET['id'])) {
  die("No Product");
}

$id = $_GET['id'];

$sql = "
SELECT p.*, i.image_1, i.image_2, i.image_3
FROM products p
JOIN images i ON p.id_P = i.id_P
WHERE p.id_P = '$id'
";
$res = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($res);

$more = mysqli_query($conn, "
SELECT p.id_P, p.name, i.image_1
FROM products p
JOIN images i ON p.id_P = i.id_P
WHERE p.id_P != '$id'
LIMIT 4
");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $product['name'] ?></title>
  <link rel="stylesheet" href="info.css">
</head>

<body>

  <div class="navbar">
    <div class="brand">Brand</div>
    <div class="nav-links">
      <a href="index.php">Home</a>
      <a href="cart.php">My Cart</a>
    </div>
  </div>

  <div class="container">

    <div class="product-details">

      <div class="product-image">
        <img id="sliderImg" src="<?= $product['image_1'] ?>" data-img1="<?= $product['image_1'] ?>"
          data-img2="<?= $product['image_2'] ?>" data-img3="<?= $product['image_3'] ?>">
      </div>

      <div class="product-info">
        <h2><?= $product['name'] ?></h2>
        <p><strong>Description:</strong> <?= $product['describtion'] ?></p>
        <p><strong>Brand:</strong> <?= $product['brand'] ?></p>
        <p><strong>Category:</strong> <?= $product['category'] ?></p>
        <div class="price"><?= $product['price'] ?> EGP</div>
        <button class="btn">Add To Cart</button>
      </div>

    </div>

    <div class="more-products">
      <h3>More Products</h3>

      <div class="products-grid">
        <?php while ($row = mysqli_fetch_assoc($more)) { ?>
          <div class="product-card">
            <div class="img-box">
              <img src="<?= $row['image_1'] ?>">
            </div>
            <p><?= $row['name'] ?></p>
            <div class="card-buttons">
              <a href="info.php?id=<?= $row['id_P'] ?>" class="btn">More Info</a>
              <button class="btn">Add</button>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

  </div>

  <footer class="footer">
    <p>Web Project Store © 2025</p>
    <p>Simple E-Commerce Demo</p>
  </footer>

  <script>
    const img = document.getElementById("sliderImg");
    const images = [img.dataset.img1, img.dataset.img2, img.dataset.img3];
    let i = 0;
    setInterval(() => {
      i = (i + 1) % images.length;
      img.src = images[i];
    }, 2500);
  </script>

</body>

</html>
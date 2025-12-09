<?php
if (isset($_GET['id'])) {
    include 'conn.php';
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM products WHERE id = $id";
    $res = mysqli_query($conn, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        $product = mysqli_fetch_assoc($res);
    } else {
        die("Product not found");
    }

    $sql2 = "SELECT * FROM products WHERE id != $id LIMIT 4";
    $related = mysqli_query($conn, $sql2);

} else {
    $product = [
        "name" => "Gaming Headset",
        "price" => "120",
        "brand" => "Logitech",
        "category" => "Electronics",
        "description" => "High-quality gaming headset with noise cancellation and RGB lights.",
        "image" => "test.jpg"
    ];

    $related_static = [
        ["name" => "Keyboard", "image" => "k.jpg"],
        ["name" => "Mouse", "image" => "m.jpg"],
        ["name" => "Speaker", "image" => "s.jpg"],
        ["name" => "Webcam", "image" => "w.jpg"]
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $product['name']; ?></title>
    <link rel="stylesheet" href="info.css">
</head>
<body>
    <nav class="navbar">
        <h1 class="logo">Brand</h1>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="cart.php">My Cart</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="product-box">
            <div class="left">
                <img src="images/<?php echo $product['image']; ?>" alt="Product Image">
            </div>

            <div class="right">
                <h2><?php echo $product['name']; ?></h2>
                <p class="price">$<?php echo $product['price']; ?></p>
                <p><strong>Brand:</strong> <?php echo $product['brand']; ?></p>
                <p><strong>Category:</strong> <?php echo $product['category']; ?></p>
                <p class="desc"><?php echo $product['description']; ?></p>
                <button class="add-btn">Add to Cart</button>
            </div>
        </div>

        <h2 class="related-title">Similar Products</h2>
        <div class="related-grid">
            <?php
            if (isset($related)) {
                while ($row = mysqli_fetch_assoc($related)) {
                    echo "<div class='card'>
                            <img src='images/{$row['image']}' alt=''>
                            <h3>{$row['name']}</h3>
                            <a href='info.php?id={$row['id']}' class='btn'>More Info</a>
                            <button class='btn add'>Add to Cart</button>
                           </div>";
                }
            } else {
                foreach ($related_static as $r) {
                    echo "<div class='card'>
                            <img src='images/{$r['image']}' alt=''>
                            <h3>{$r['name']}</h3>
                            <a href='#' class='btn'>More Info</a>
                            <button class='btn add'>Add to Cart</button>
                          </div>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
<?php include "php_prod.php"; ?>

<?php
    $id        = isset($_GET['id']) ? $_GET['id'] : '';
    $name      = isset($_GET['name']) ? $_GET['name'] : '';
    $price     = isset($_GET['price']) ? $_GET['price'] : '';
    $desc      = isset($_GET['desc']) ? $_GET['desc'] : '';
    $brand     = isset($_GET['brand']) ? $_GET['brand'] : '';
    $category  = isset($_GET['category']) ? $_GET['category'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Products</title>
    <link rel="stylesheet" href="adminStyle.css">
</head>
<body>

<div class="form-container">
    
    <h2>Manage Products</h2>

    <form action="php_prod.php" method="post" enctype="multipart/form-data">

        <label for="id_prod">Product ID</label>
        <input type="number" name="id_prod" id="id_prod" value="<?= htmlspecialchars($id) ?>" required>

        <label for="name_prod">Name</label>
        <input type="text" name="name_prod" id="name_prod" value="<?= htmlspecialchars($name) ?>" required>

        <label for="image">Image</label>
        <input type="file" name="image" id="image">


        <label for="desc">Description</label>
        <input type="text" name="desc" id="desc" value="<?= htmlspecialchars($desc) ?>">

        <label for="price">Price</label>
        <input type="number" step="0.01" name="price" id="price" value="<?= htmlspecialchars($price) ?>" required>

        <label for="brand">Brand</label>
        <input type="text" name="brand" id="brand" value="<?= htmlspecialchars($brand) ?>">

        <label for="category">Category</label>
        <input type="text" name="category" id="category" value="<?= htmlspecialchars($category) ?>">

        <div class="buttons">
            <button type="submit" name="action" value="add" class="add">Add</button>
            <button type="submit" name="action" value="update" class="update">Update</button>
            <button type="submit" name="action" value="delete" class="delete" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
            <button type="button" onclick="window.location.href='dashbord_html.php'" class="back">Dashboard</button>
        </div>

    </form>
</div>

</body>
</html>

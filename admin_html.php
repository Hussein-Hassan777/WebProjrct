<?php include "php_prod.php"; ?>

<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
$price = isset($_GET['price']) ? $_GET['price'] : '';
$desc = isset($_GET['desc']) ? $_GET['desc'] : '';
$brand = isset($_GET['brand']) ? $_GET['brand'] : '';
$category = isset($_GET['category']) ? $_GET['category'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Products</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3>Manage Products</h3>
            </div>
            <div class="card-body">
                <form action="php_prod.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="id_prod" class="form-label">Product ID</label>
                        <input type="text" name="id_prod" id="id_prod" class="form-control"
                            value="<?= htmlspecialchars($id) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="name_prod" class="form-label">Name</label>
                        <input type="text" name="name_prod" id="name_prod" class="form-control"
                            value="<?= htmlspecialchars($name) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="image1" class="form-label">Image 1</label>
                        <input type="file" name="image1" id="image1" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="image2" class="form-label">Image 2</label>
                        <input type="file" name="image2" id="image2" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="image3" class="form-label">Image 3</label>
                        <input type="file" name="image3" id="image3" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <input type="text" name="desc" id="desc" class="form-control"
                            value="<?= htmlspecialchars($desc) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" step="0.01" name="price" id="price" class="form-control"
                            value="<?= htmlspecialchars($price) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" name="brand" id="brand" class="form-control"
                            value="<?= htmlspecialchars($brand) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" name="category" id="category" class="form-control"
                            value="<?= htmlspecialchars($category) ?>">
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" name="action" value="add" class="btn btn-success flex-fill">Add</button>
                        <button type="submit" name="action" value="update"
                            class="btn btn-primary flex-fill">Update</button>
                        <button type="submit" name="action" value="delete" class="btn btn-danger flex-fill"
                            onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                        <button type="button" class="btn btn-secondary flex-fill"
                            onclick="window.location.href='dashbord_html.php'">Dashboard</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="scripts/bootstrap.bundle.min.js"></script>
</body>

</html>
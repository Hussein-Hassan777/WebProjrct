<?php include "dashbord.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link href="styles/dashbord.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <main class="col-md-12 ms-sm-auto px-4 py-4">

            <!-- ===== CARDS ===== -->
            <div class="col-sm-12 mb-2">
                <div class="card " style="background-color: #1581BF;">
                    <div class="card-body">
                        <h5 class="card-title">Products</h5>
                        <p class="card-text"><?= $total_products ?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 mb-2">
                <div class="card " style="background-color: #3DB6B1;">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text"><?= $total_users ?></p>
                    </div>
                </div>
            </div>


            <div class="btn1">
                <a href="admin_html.php"><button type="button">add products</button></a>
            </div>

            <div class="mb-3">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#" onclick="showTab('products')">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="showTab('customers')">Customers</a></li>
                </ul>
            </div>

            <!-- ===== PRODUCTS TABLE ===== -->
            <div id="products" class="tab-content">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID Product</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($products as $p): ?>
                        <tr>
                            <td><?= $p['id_P'] ?></td>
                            <td><?= $p['name'] ?></td>
                            <td><?= $p['describtion'] ?></td>
                            <td><?= $p['price'] ?></td>
                            <td><?= $p['brand'] ?></td>
                            <td><?= $p['category'] ?></td>
        
                            <td>
                                <div class="wrap-buttons">

                                    <form action="php_prod.php" method="POST" style="display:inline-block;">
                                        <input type="hidden" name="id_prod" value="<?= $p['id_P'] ?>">
                                        <input type="hidden" name="action" value="delete">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>

                                    <a class="btn btn-primary" 
                                    href="admin_html.php?
                                    id=<?= $p['id_P'] ?>&
                                    name=<?= urlencode($p['name']) ?>&
                                    desc=<?= urlencode($p['describtion']) ?>&
                                    price=<?= $p['price'] ?>&
                                    brand=<?= urlencode($p['brand']) ?>&
                                    category=<?= urlencode($p['category']) ?>">
                                    Edit
                                    </a>
                                    
                                </div>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- ===== CUSTOMERS TABLE ===== -->
            <div id="customers" class="tab-content" style="display:none;">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $u): ?>
                        <tr>
                            
                            <td><?= $u['first_name'] ?></td>
                            <td><?= $u['last_name'] ?></td>
                            <td><?= $u['phone'] ?></td>
                            <td><?= $u['email'] ?></td>
                            <td>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

    <script src="scripts/bootstrap.bundle.min.js"></script>
    <script>
        function showTab(tabId){
            document.querySelectorAll('.tab-content').forEach(tc=>tc.style.display='none');
            document.getElementById(tabId).style.display='block';
            document.querySelectorAll('.nav-link').forEach(t=>t.classList.remove('active'));
            document.querySelector(`[onclick="showTab('${tabId}')"]`).classList.add('active');
        }
    </script>

</body>
</html>

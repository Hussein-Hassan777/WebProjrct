<?php include "dashbord.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/dashbord.css">
</head>
<body>
<div class="container-fluid py-4">

    <!-- ===== CARDS ===== -->
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <div class="card text-white bg-primary h-100">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <p class="card-text fs-3"><?= $total_products ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card text-white bg-success h-100">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text fs-3"><?= $total_users ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card text-white bg-warning h-100">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <p class="card-text fs-3"><?= $total_orders ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card text-white bg-danger h-100">
                <div class="card-body">
                    <h5 class="card-title">Total Sales</h5>
                    <p class="card-text fs-3"><?= number_format($total_sales, 2) ?> $</p>
                </div>
            </div>
        </div>
    </div>


<!-- ===== BUTTONS ===== -->
    <div class="buttons-container">
        <a href="admin_html.php" class="btn btn-primary"> Add Products</a>
        <a href="index.php" class="btn btn-secondary">Home</a>
    </div>


<!-- ===== TABS ===== -->
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item"><a class="nav-link active" href="#" onclick="showTab('products')">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="#" onclick="showTab('customers')">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="#" onclick="showTab('order')">Order</a></li>
    </ul>

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
                        <div class="d-flex gap-1">
                            <form action="php_prod.php" method="POST" style="display:inline-block;">
                                <input type="hidden" name="id_prod" value="<?= $p['id_P'] ?>">
                                <input type="hidden" name="action" value="delete">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>

                            <a class="btn btn-primary btn-sm" 
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
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($users as $u): ?>
                <tr>
                    <td><?= $u['first_name'] ?></td>
                    <td><?= $u['last_name'] ?></td>
                    <td><?= $u['phone'] ?></td>
                    <td><?= $u['email'] ?></td>
                    <td><?= $u['role'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div id="order" class="tab-content" style="display:none;">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID Order</th>
                    <th>History</th>
                    <th>Email Customer</th>
                    <th>Phone Customer</th>
                    <th>Address</th>
                    <th>total Orrder</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php foreach($orders as $o): ?>
                <tr>
                    <td><?= $o['id_O'] ?></td>
                    <td><?= $o['history'] ?></td>
                    <td><?= $o['guest_email'] ?></td>
                    <td><?= $o['guest_phone'] ?></td>
                    <td><?= $o['guest_address'] ?></td>
                   <td><?= number_format($o['total_order'], 2) ?> $</td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>


</div>

<script src="scripts/bootstrap.bundle.min.js"></script>
<script>
    function showTab(tabId){
        document.querySelectorAll('.tab-content').forEach(tc => tc.style.display='none');
        document.getElementById(tabId).style.display='block';
        document.querySelectorAll('.nav-link').forEach(t => t.classList.remove('active'));
        document.querySelector(`[onclick="showTab('${tabId}')"]`).classList.add('active');
    }
</script>
</body>
</html>

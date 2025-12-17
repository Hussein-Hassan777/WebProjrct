<?php
session_start();

if (isset($_POST['submit']))
    if ($_POST['phone'] != $_SESSION['phone'] || $_POST['password'] != $_SESSION['password'])
        echo "<script>alert('the phone number or password is wrong'); location='index.php';</script>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/all.min.css">
    <link rel="stylesheet" href="styles/edit_info_style.css">
    <link rel="shortcut icon" href="images/icons/logo.png" type="image/x-icon">
    <title>My Market</title>
</head>

<body>
    <h3>
        <a href="index.php">Home</a>
    </h3>
    <div class="d-flex align-items-center flex-column div_form">
        <form action="edit_info_backend.php" method="post" class="w-25">
            <div class="mb-4">
                <label for="formFile" class="form-label">First Name</label>
                <input class="form-control" type="text" id="formFile" value="<?= $_SESSION['first_name'] ?>"
                    name="first_name">
            </div>
            <div class="mb-4">
                <label for="formFile" class="form-label">Last Name</label>
                <input class="form-control" type="text" id="formFile" value="<?= $_SESSION['last_name'] ?>"
                    name="last_name">
            </div>
            <div class="mb-4">
                <label for="formFile" class="form-label">Email</label>
                <input class="form-control" type="email" id="formFile" value="<?= $_SESSION['email'] ?>" name="email">
            </div>
            <div class="mb-4">
                <label for="formFile" class="form-label">Phone</label>
                <input class="form-control" type="text" id="formFile" value="<?= $_SESSION['phone'] ?>" name="phone">
            </div>
            <div class="mb-4">
                <label for="formFile" class="form-label">New Password</label>
                <input class="form-control" type="password" id="formFile" name="password"
                    value="<?= $_SESSION['password'] ?>">
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="ubdatebtn" value="submit">update</button>
            </div>
        </form>
    </div>
    <script src="scripts/bootstrap.bundle.min.js"></script>
    <script src="scripts/all.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        id-P
        <input type="text" name="id_P" required>
        <br>
        <br>
        name
        <input type="text" name="name" required>
        <br>
        <br>
        describtion
        <input type="text" name="describtion" required>
        <br>
        <br>
        price
        <input type="number" name="price" required>
        <br>
        <br>
        brand
        <input type="text" name="brand" required>
        <br>
        <br>
        category
        <input type="text" name="category" required>
        <br>
        <br>
        image1
        <input type="text" name="image_1" required>
        <br>
        <br>
        image2
        <input type="text" name="image_2" required>
        <br>
        <br>
        image3
        <input type="text" name="image_3" required>
        <br>
        <br>
        <button type="submit" name="submit" value="submit">submit</button>
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $id_P = $_POST['id_P'];
    $name = $_POST['name'];
    $describtion = $_POST['describtion'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $image_1 = $_POST['image_1'];
    $image_2 = $_POST['image_2'];
    $image_3 = $_POST['image_3'];
    $conn = mysqli_connect("localhost:3307", "root", "", "web_project_db");
    if (!$conn) {
        echo mysqli_connect_error();
    }
    $query = "INSERT INTO `products`(`id_P`, `name`, `describtion`, `price`, `brand`, `category`) VALUES ('$id_P','$name','$describtion','$price','$brand','$category')";
    $query2 = "INSERT INTO `images`(`id_P`, `image_1`, `image_2`, `image_3`) VALUES ('$id_P','$image_1','$image_2','$image_3')";
    mysqli_query($conn, $query);
    mysqli_query($conn, $query2);
}
?>
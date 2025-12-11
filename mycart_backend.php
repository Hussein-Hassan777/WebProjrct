<?php
$host = "localhost:3307";
$user = "root";
$pass = "";
$db = "ecommerce_db";
$conn = mysqli_connect($host, $user, $pass, $db);
if (isset($_POST['cart'])) {
    $id = $_POST['cart'];
    $query = "SELECT p.name, p.price, i.image_1 FROM products p, images i WHERE p.id_P=i.id_P and i.id_P='$id'";
    $result2 = mysqli_query($conn, $query);
    $rows2 = [];
    while ($row2 = mysqli_fetch_assoc($result2)) {
        $rows2[] = $row2;
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <img src="<?php echo $rows2[0]['image_1'] ?>" alt="">
    <p><?php echo $rows2[0]['name'] ?></p>
    <p><?php echo $rows2[0]['price'] ?></p>
</body>

</html>
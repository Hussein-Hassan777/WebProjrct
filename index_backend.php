<?php
//products
$host = "localhost:3307";
$user = "root";
$pass = "";
$db = "ecommerce_db";
$conn = mysqli_connect($host, $user, $pass, $db);
$query = "SELECT p.name, p.price, i.image_1, i.image_2, i.image_3 from products p, images i where i.id_P=p.id_P";
$result = mysqli_query($conn, $query);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
//order
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];
    $details = $_POST['details'];
    $insert = "INSERT INTO `special_order`(`name`, `email`, `phone_number`, `message_title`, `order_details`) VALUES ('$name','$email','$phone','$title','$details')";
    mysqli_query($conn, $insert);
    header('Location: index.php');
}
//the best-selling products
//most_selling
$selling = "SELECT p.name, p.price, i.image_1 FROM products p, images i, the_most_selling s where p.id_P=s.id_P and i.id_P=s.id_P";
$result2 = mysqli_query($conn, $selling);
$row2 = [];
while ($row2 = mysqli_fetch_assoc($result2)) {
    $rows2[] = $row2;
}
//most_rating
$rating = "SELECT p.name, p.price, i.image_1 FROM products p, images i, the_most_rating r where p.id_P=r.id_P and i.id_P=r.id_P";
$result3 = mysqli_query($conn, $rating);
$row3 = [];
while ($row3 = mysqli_fetch_assoc($result3)) {
    $rows3[] = $row3;
}
//offers
$offers = "SELECT p.name, p.price, i.image_1 FROM products p, images i, offers o where p.id_P=o.id_P and i.id_P=o.id_P";
$result4 = mysqli_query($conn, $offers);
$row4 = [];
while ($row4 = mysqli_fetch_assoc($result4)) {
    $rows4[] = $row4;
}
?>
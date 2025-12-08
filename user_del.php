<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "ecommerce_db", 3307);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['action']) && $_POST['action'] == "delete") {

    $id_u = $_POST['id_u']; 
    $del = "DELETE FROM users WHERE id_u = '$id_u'";
    mysqli_query($conn, $del);
    header("Location: dashbord_html.php");
    exit();
}

mysqli_close($conn);
?>

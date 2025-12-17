<?php
include("conn.php");
session_start();
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $update = "UPDATE `users` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`phone`='$phone',`password`='$password' WHERE `id_U`='{$_SESSION['id_U']}'";
    if (mysqli_query($conn, $update)) {
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['password'] = $password;
        echo "<script>alert('Profile updated successfully'); location='index.php';</script>";
    } else {
        echo "<script>alert('Update failed'); location='edit_info.php';</script>";
    }
}
?>
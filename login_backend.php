<?php
session_start();
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Check credentials
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $_SESSION['id_U'] = $row['id_U'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['profile_img'] = $row['profile_img'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['password'] = $row['password'];

        if ($row['role'] === 'admin') {
            header("Location:dashbord_html.php");
        } else {
            header("Location: index.php");
        }
        exit();
    } else {
        // Redirect back to login.html with a message
        header("Location: login.php?message=InvalidCredentials");
        exit();
    }
}
?>
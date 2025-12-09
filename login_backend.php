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

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['full_name'];
        $_SESSION['role'] = $row['role'];

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
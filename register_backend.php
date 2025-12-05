<?php
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];  // plain text
    $role = 'user'; // default role

    // Check if email already exists
    $check_sql = "SELECT * FROM users WHERE email='$email'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Redirect back to HTML page with message
        header("Location: register.html?message=EmailAlreadyExists");
        exit();
    } else {
        // Insert user into database
        $sql = "INSERT INTO users (full_name, email, phone, password, role)
                VALUES ('$full_name', '$email', '$phone', '$password', '$role')";

        if ($conn->query($sql) === TRUE) {
            header("Location: register.html?message=Success");
            exit();
        } else {
            header("Location: register.html?message=Error");
            exit();
        }
    }
}
?>

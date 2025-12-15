<?php
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];  // plain text
    $role = 'customer'; // default role
    // Check if email already exists
    $check_sql = "SELECT * FROM users WHERE email='$email'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Redirect back to HTML page with message
        header("Location: register.php?message=EmailAlreadyExists");
        exit();
    } else {
        // Insert user into database
        $sql = "INSERT INTO users (first_name, last_name, email, phone, password, role)
                VALUES ('$first_name', '$last_name', '$email', '$phone', '$password', '$role')";

        if ($conn->query($sql) === TRUE) {
            header("Location: register.php?message=Success"); //
            exit();
        } else {
            header("Location: register.php?message=Error"); //
            exit();
        }
    }
}
?>
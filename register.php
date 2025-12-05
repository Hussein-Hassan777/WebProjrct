<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/all.min.css">
    <link rel="stylesheet" href="styles/login_style.css">
</head>

<body class="register-page d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 380px;">
        <h3 class="text-center mb-3">Sign up</h3>

        <!-- Message container -->
        <div id="message" style="margin-bottom:15px;"></div>

        <form action="register_backend.php" method="POST">
            <div class="mb-3">
                <label>Full name</label>
                <input type="text" name="full_name" class="form-control" placeholder="Enter your Full name" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn-signup btn-primary w-100">Sign up</button>
            <p class="text-center mt-3">
                Already have an account?
                <a href="login.html">Login</a>
            </p>
        </form>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        const params = new URLSearchParams(window.location.search);
        const messageDiv = document.getElementById('message');

        if (params.has('message')) {
            const msg = params.get('message');

            if (msg === 'EmailAlreadyExists') {
                messageDiv.innerHTML = '<div class="alert alert-danger text-center">This email is already registered!</div>';
            } else if (msg === 'Success') {
                messageDiv.innerHTML = '<div class="alert alert-success text-center">Registration successful! You can now <a href="login.html">login</a>.</div>';
            } else if (msg === 'Error') {
                messageDiv.innerHTML = '<div class="alert alert-danger text-center">Something went wrong. Please try again!</div>';
            }
        }
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign up</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/all.min.css">
    <link rel="stylesheet" href="styles/login_style.css">
</head>

<body class="login-page">

    <div class="card shadow p-4">

        <div class="text-center mb-4 position-relative">
            <div class="icon">
                <img src="images/icons/man.png" alt="">
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 divider-vertical d-flex flex-column justify-content-center px-4">
                <h4 class="text-center mb-4">Sign up</h4>

                <div class="d-grid gap-3">
                    <a href="register.php" class="btn btn-outline-secondary btn-signup">
                        Sign up with email
                    </a>
                </div>

                <p class="text-center text-muted mt-4" style="font-size: 0.75rem;">
                    By signing up, you agree to the <a href="#" class="text-dark text-decoration-underline">Terms of
                        Service</a>
                    and acknowledge you've read our <a href="#" class="text-dark text-decoration-underline">Privacy
                        Policy</a>.
                </p>
            </div>

            <div class="col-md-6 px-4">
                <h4 class="text-center mb-4">Log in</h4>

                <!-- Message container -->
                <div id="message" style="margin-bottom:15px;"></div>

                <form action="login_backend.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label text-muted small">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-muted small">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="" required>
                    </div>

                    <div class="text-end mb-4">
                        <a href="#" class="text-dark text-decoration-underline small">Forget your password</a>
                    </div>

                    <button class="btn btn-login w-100">Log in</button>
                </form>
            </div>

        </div>

        <hr class="mt-4 mb-3">
        <div class="text-center text-muted small">
            <div class="d-flex justify-content-center gap-3 mt-2 text-muted" style="font-size: 0.7rem;">
                <span>About</span>
                <span>Help Center</span>
                <span>Terms of Service</span>
                <span>Privacy Policy</span>
                <span>Cookie Policy</span>
            </div>
        </div>

        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

        <script>
            // Read query string parameters
            const params = new URLSearchParams(window.location.search);
            const messageDiv = document.getElementById('message');

            if (params.has('message')) {
                const msg = params.get('message');

                if (msg === 'InvalidCredentials') {
                    messageDiv.innerHTML = '<div class="alert alert-danger text-center">Invalid email or password!</div>';
                }
            }
        </script>
    </div>
</body>

</html>
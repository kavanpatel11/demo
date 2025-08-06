<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <nav>
        <span><a href="home.php">Home</a></span>
        <span><a href="#">Cart</a></span>
        <span><a href="login.php">Login</a></span>
        <span><a href="register.php">Register</a></span>
    </nav>
    <div class="center">
        <div class="container">
            <h2>Login</h2>
            <form method="post">
                <label>Email</label>
                <input type="email" name="login_email" placeholder="Your Email">

                <label>Password</label>
                <input type="password" name="login_pass" placeholder="Your Password">

                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <footer>
        &copy; 2025 Electronic Store.
    </footer>
</body>

</html>
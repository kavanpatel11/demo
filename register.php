<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <nav>
        <a href="home.php">Home</a>
        <a href="cart.php">Cart</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </nav>
    <div class="center">
        <div class="container">
            <h2>Register</h2>
            <form method="post">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter Your Name" Required>

                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Your Email" Required>

                <label>Password</label>
                <input type="password" name="pass" placeholder="Enter Your Password" Required>

                <label>Phone no</label>
                <input type="text" name="pass" placeholder="Enter Your Phone No" Required>

                <label>Address</label>
                <input type="text" name="pass" placeholder="Enter Your Address" Required>

                <button type="submit">Register</button>
            </form>
            <div class="account">Already Have Account? <a class="login" href="#">Login</a></div>
        </div>
    </div>
    <footer>
        &copy; 2025 Electronic Store.
    </footer>
</body>

</html>
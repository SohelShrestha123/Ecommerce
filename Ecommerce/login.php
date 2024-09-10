<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="container">
        <form action="">
            <h1>Login</h1>
            <div class="data-box">
                <input type="text" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="data-box">
                <input type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="box">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="b">Login</button>

            <div class="register">
                <p>Don't have account? <a href="form.html">Create Account</a></p>
            </div>

        </form>
    </div>
</body>
</html>
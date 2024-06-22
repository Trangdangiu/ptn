<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Ký</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://localhost/mohinhmvc/Public/Css/dangki.css">
</head>

<body>
    <div class="wrapper">
        <form action="http://localhost/mohinhmvc/dangnhap_ctrl/dangki" method="post" class="">
            <h1>Sign Up</h1>
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Email" required>
                <i class='bx bxs-envelope'></i>
            </div>


            <button type="submit" class="btn" name="dangki">Register</button>
            <div class="register-link">
                <p> have an account? <a href="http://localhost/mohinhmvc/MVC/Views/dangnhap.php">Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>
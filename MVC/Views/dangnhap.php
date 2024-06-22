<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="http://localhost/mohinhmvc/Public/Css/dangnhap.css">


<body>
    <div class="wrapper">
        <form action="http://localhost/mohinhmvc/dangnhap_ctrl/dangnhap" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username..." required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" id="pass" name=" password" placeholder="Password..." required>

                <div class="icon"><i class='bx bxs-lock-alt' onclick="togglePassword()"></i></div>
            </div>

            <div class=" remember-forgot">
                <label for=""><input type="checkbox" name="" id=""> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn" name="dangnhap">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="http://localhost/mohinhmvc/MVC/Views/dangki.php">Register</a></p>
            </div>
        </form>
    </div>
    <script src="http://localhost/mohinhmvc/Public/Js/dangnhap.js"></script>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("pass");
            var togglePasswordIcon = document.querySelector(".toggle-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";

            } else {
                passwordField.type = "password";

            }
        }
    </script>
</body>

</html>
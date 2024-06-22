<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/Css/dinhdang7.css">
    <script src="./Public/Js/jquery-3.3.1.slim.min.js"></script>
    <script src="./Public/Js/popper.min.js"></script>
    <script src="./Public/Js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">

        <div class="menu1" style=" height:58px; font-size:18px;">
            <nav class="navbar navbar-expand-sm navbar-dark bg-primary rounded">
                <ul class="navbar-nav mr-autoavbar">
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="#">Đăng nhập</a>
                    </li>

                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="#">Thoát</a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="row">
            <div class="col-lg-2 mt-3">
                <div class="menu_left1" style="width: 250px;">
                    <div class="list-group">
                        <a style="background: #e7e4e4;font-weight:bold;text-align:center;" href="#" class="list-group-item btn btn-link" data-toggle="collapse" data-target="#target1">Quản lý Khu vui Chơi</a>
                        <div class="collapse" id="target1">
                            <a href="" class="list-group-item">Tổ hợp safari</a>
                            <a href="#" class="list-group-item">Thủy Cung</a>
                            <a href="#" class="list-group-item ">Happy Farm</a>
                            <a href="#" class="list-group-item">Công Viên Nước</a>
                            <a href="#" class="list-group-item">Tổ Hợp trò Chơi</a>
                            <a href="#" class="list-group-item">Rạp Phim Bay</a>
                            <a href="#" class="list-group-item">Hội Trường</a>
                            <a href="#" class="list-group-item">Làng Nghề</a>
                            <a href="#" class="list-group-item">Ẩm thực</a>
                            <a href="#" class="list-group-item">Lưu Trú</a>
                            <a href="#" class="list-group-item">Phim Trường</a>
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-lg-10 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="content1">
                            <?php
                            include_once './MVC/Views/Pages/' . $data['page'] . '.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer1">

            </div>
        </div>

</body>

</html>
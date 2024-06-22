<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <form action="http://localhost/mohinhmvc/formchinh_ctrl/timkiem" method="post">
        <div id="safari" class="form-container" class="row">
            <div class="row">
                <div class="col-md-2"><a href="http://localhost/mohinhmvc/formthem_ctrl/" class="btn btn-success"><i class='bx bx-plus'></i> Tạo Thông Tin</a></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control " placeholder="Tìm Kiếm......mã khu" name="txttimkiem">
                    </div>
                </div>
                <div class="col-md-2"><button type="submit" class="btn btn-success" name="timkiem"><i class='bx bx-search-alt-2'></i>Tìm Kiếm</button></div>
                <div class="col-md-1"><a href="http://localhost/mohinhmvc/Home" class="btn btn-info">Reload</a></div>
                <div class="col-md-1"><a href="http://localhost/mohinhmvc/dangnhap_ctrl" class="btn btn-danger">Logout</a></div>
            </div>


            <table class="table table-hover">
                <thead>
                    <tr class="text-primary">
                        <th>STT</th>
                        <th>Mã Khu</th>
                        <th>Tên Khu</th>
                        <th>Địa Điểm</th>
                        <th>Trạng Thái</th>
                        <th>Thời gian mở</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu']) > 0) {

                        $i = 0;
                        while ($row = mysqli_fetch_assoc($data['dulieu'])) {
                    ?>

                            <tr>
                                <td><?php echo (++$i) ?></td>
                                <td><?php echo $row['makhu'] ?></td>
                                <td><?php echo $row['tenkhu'] ?></td>
                                <td><?php echo $row['diadiem'] ?></td>
                                <td><?php echo $row['trangthai'] ?></td>
                                <td><?php echo $row['thoigian'] ?></td>
                                <td>
                                    <a href="http://localhost/mohinhmvc/formchinh_ctrl/sua/<?php echo $row['makhu'] ?>" class="btn btn-outline-primary">Sửa</a>
                                    <a href="http://localhost/mohinhmvc/formchinh_ctrl/xoa/<?php echo $row['makhu'] ?> " class="btn btn-outline-danger">Xóa</a>
                                </td>
                            </tr>

                    <?php

                        }
                    }
                    ?>

                </tbody>
            </table>

        </div>
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Thêm</title>
    <link rel="stylesheet" href="./Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="text-center">Form Sửa</h2>

        <form action="http://localhost/mohinhmvc/formchinh_ctrl/suadl" method="post">
            <?php
            if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu']) > 0) {
                while ($row = mysqli_fetch_array($data['dulieu'])) {
            ?>
                    <div class="form-group ">
                        <label for="makhu">Mã Khu</label>
                        <input type="text" class="form-control" id="makhu" placeholder="Enter makhu" value=" <?php echo $row['makhu'] ?>" name="makhu">
                    </div>
                    <div class="form-group ">
                        <label for="tenkhu">Tên Khu</label>
                        <input type="text" class="form-control" id="tenkhu" placeholder="Enter tenkhu" value="<?php echo $row['tenkhu'] ?>" name="tenkhu">
                    </div>
                    <div class="form-group ">
                        <label for="diadiem">Địa Điểm</label>
                        <input type="text" class="form-control" id="diadiem" placeholder="Enter diadiem" value="<?php echo $row['diadiem'] ?>" name="diadiem">
                    </div>
                    <div class="form-group ">
                        <label for="trangthai">Trạng thái</label>
                        <input type="text" class="form-control" id="trangthai" placeholder="Enter trangthai" value="<?php echo $row['trangthai'] ?>" name="trangthai">
                    </div>
                    <div class="form-group ">
                        <label for="thoigian">Thời Gian Mở</label>
                        <input type="date" class="form-control" id="thoigian" placeholder="Enter thoigian" value="<?php echo $row['thoigian'] ?>" name="thoigian">
                    </div>
            <?php
                }
            }
            ?>
            <button type="submit" class="btn btn-primary" name="sua">Sửa</button>
        </form>
    </div>

</body>

</html>
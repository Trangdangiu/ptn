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
        <h2 class="text-center">Form Thêm</h2>
        <form action="http://localhost/mohinhmvc/formthem_ctrl/themmoi" method="post">
            <div class="form-group ">
                <label for="makhu">Mã Khu</label>
                <input type="text" class="form-control" id="makhu" placeholder="Enter makhu" name="makhu">
            </div>
            <div class="form-group ">
                <label for="tenkhu">Tên Khu</label>
                <input type="text" class="form-control" id="tenkhu" placeholder="Enter tenkhu" name="tenkhu">
            </div>
            <div class="form-group ">
                <label for="diadiem">Địa Điểm</label>
                <input type="text" class="form-control" id="diadiem" placeholder="Enter diadiem" name="diadiem">
            </div>

            <div class="form-group ">
                <label for="trangthai">Trạng thái</label>
                <select name="trangthai" class="form-control" id="">
                    <option value="Đóng cửa">Đóng cửa</option>
                    <option value="Mở cửa">Mở cửa</option>
                </select>
            </div>

            <div class="form-group ">
                <label for="thoigian">Thời Gian Mở</label>
                <input type="date" class="form-control" id="thoigian" placeholder="Enter thoigian" name="thoigian">
            </div>

            <button type="submit" class="btn btn-primary" name="them">Thêm</button>
            <a href="http://localhost/mohinhmvc/Home" class="btn btn-info">Quay Lại</a>
        </form>
    </div>

</body>

</html>
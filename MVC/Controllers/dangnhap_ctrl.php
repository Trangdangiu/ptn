<?php
class dangnhap_ctrl extends controller
{
    public $dl;

    function __construct()
    {
        $this->dl = $this->model('khuchoi_m');
    }
    function Get_data()
    {
        $this->view('dangnhap');
    }
    function dangnhap()
    {
        if (isset($_POST['dangnhap'])) {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $kq1 = $this->dl->checkdangnhap($user, $pass);
            $kq2 = $this->dl->checkdangnhap_user($user, $pass);
            // check đăng nhập nếu có dữ liệu trong tài khoản mà không có dữ liệu trong bảng tk user thì là admin và ngược lại
            if (mysqli_num_rows($kq1) > 0) {
                if (mysqli_num_rows($kq2) > 0) {
                    echo "<script> alert('Đăng nhập  thành công')</script>";
                    $this->view(
                        'huongdan'
                    );
                } else {
                    echo "<script> alert('Đăng nhập  thành công')</script>";
                    $this->view('Masterlayout', [
                        'page' => 'home',
                        'dulieu' => $this->dl->laydulieu()

                    ]);
                }
            } else {
                echo "<script> alert('Đăng nhập không thành công');history.back();</script>";
                // return;
            }
        }
    }


    function dangki()
    {
        if (isset($_POST['dangki'])) {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $email = $_POST['email'];
            $hash_pass = password_hash($pass, PASSWORD_DEFAULT);
            $ktra = $this->dl->checktrungmaid($user);
            if ($ktra) {
                echo "<script> alert ('Tài khoản đã tồn tại!');history.back();</script>";
                return;
            } else {
                $kq = $this->dl->dangki_insert($user, $pass, $email);
                $this->dl->dangkiadmin_insert($user, $pass, $email);

                if ($kq) {
                    echo "<script> alert ('Thêm mới thành công!');history.back();</script>";
                    return;
                } else {
                    echo "<script> alert ('Thêm mới thất bại!');history.back();</script>";
                    return;
                }
            }
        }
    }
}

<?php
class khuchoi_m extends connectDB
{
    // public function __construct()
    // {
    //     $this->con = mysqli_connect($this->server, $this->user, $this->pass, $this->dbname);
    // }

    function vuichoi_ins($mk, $tk, $dd, $tt, $tg)
    {
        $sql = "INSERT INTO tblgiaitri VALUES ('$mk','$tk','$dd','$tt','$tg')";
        return mysqli_query($this->con, $sql);
    }
    // thêm dữ liệu của dăng kí tài khoản 
    function dangki_insert($user, $pass, $email)
    {
        $sql = "INSERT INTO taikhoan VALUES ('$user','$pass','$email')";
        return mysqli_query($this->con, $sql);
    }
    // thêm dữ liệu đăng kí của admin
    function dangkiadmin_insert($user, $pass, $email)
    {
        $sql = "INSERT INTO user_admin VALUES ('$user','$pass','$email')";
        return mysqli_query($this->con, $sql);
    }


    public function laydulieu()
    {
        $sql = "SELECT * FROM tblgiaitri";
        return mysqli_query($this->con, $sql);
    }
    // kiểm tra trùng mã
    function checktrungmaid($id)
    {
        $sql = "Select * From taikhoan Where username='$id'";
        $dl = mysqli_query($this->con, $sql);
        $kq = false;
        if (mysqli_num_rows($dl) > 0) {
            $kq = true;  //trùng mã
        }
        return $kq;
    }
    function check_khuvuichoi($id)
    {
        $sql = "Select * From tblgiaitri Where makhu='$id'";
        $dl = mysqli_query($this->con, $sql);
        $kq = false;
        if (mysqli_num_rows($dl) > 0) {
            $kq = true;  //trùng mã
        }
        return $kq;
    }
    function checkmk($id)
    {
        $sql = "SELECT pass FROM taikhoan WHERE username='$id'";
        $result = mysqli_query($this->con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $pass_hass = $row['pass'];
            }
            return $pass_hass;
        }
    }
    // tìm kiếm theo
    public function timkiem($makhu)
    {
        $sql = "SELECT * FROM tblgiaitri WHERE makhu like '%$makhu%' ";
        return mysqli_query($this->con, $sql);
    }

    public function find1($id)
    {
        $sql = "SELECT * FROM tblgiaitri WHERE makhu like '%$id%'";
        return mysqli_query($this->con, $sql);
    }
    // check đăng nhập tài khoản của cả user và admin
    public function checkdangnhap($user, $pass)
    {
        $sql = "SELECT * FROM taikhoan WHERE username ='$user' AND pass ='$pass'";
        return mysqli_query($this->con, $sql);
    }
    // check đăng nhập trang chủ user
    public function checkdangnhap_user($user, $pass)
    {
        $sql = "SELECT * FROM user_admin WHERE username ='$user' AND pass ='$pass'";
        return mysqli_query($this->con, $sql);
    }
    function del($id)
    {
        $sql = "DELETE FROM tblgiaitri WHERE makhu = '$id'";
        return mysqli_query($this->con, $sql);
    }
    function vuichoi_update($mk, $tk, $dd, $tt, $tg)
    {
        $sql = "UPDATE tblgiaitri SET tenkhu='$tk',diadiem='$dd',trangthai='$tt',thoigian='$tg'
        WHERE makhu='$mk'";
        return mysqli_query($this->con, $sql);
    }
}

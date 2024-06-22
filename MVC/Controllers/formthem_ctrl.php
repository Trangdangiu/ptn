<?php
class formthem_ctrl extends controller
{
    public $vuichoi;

    function __construct()
    {
        $this->vuichoi = $this->model('khuchoi_m');
    }
    function Get_data()
    {
        $this->view('Masterlayout', ['page' => 'them']);
    }

    function themmoi()
    {
        if (isset($_POST['them'])) {
            $mk = $_POST['makhu'];
            $tk = $_POST['tenkhu'];
            $dd = $_POST['diadiem'];
            $tt = $_POST['trangthai'];
            $tg = $_POST['thoigian'];

            $kq1 = $this->vuichoi->check_khuvuichoi($mk);
            if ($kq1) {
                echo "<script> alert ('Trùng mã id!');history.back();</script>";
            } else if ($mk ==    '') {
                echo "<script> alert ('Mã không được để trống');history.back();</script>";
            }
            // gọi hàm thêm dl 
            else {
                $kq = $this->vuichoi->vuichoi_ins($mk, $tk, $dd, $tt, $tg);
                if ($kq) {
                    echo "<script> alert ('Thêm mới thành công!')</script>";
                } else {
                    echo "<script> alert ('Thêm mới thất bại!')</script>";
                }
            }


            $this->view("Masterlayout", [
                "page" => "home",
                "dulieu" => $this->vuichoi->laydulieu()
            ]);
        }
    }
}

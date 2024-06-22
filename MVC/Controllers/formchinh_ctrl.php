<?php


class formchinh_ctrl extends controller
{

    protected $dl;
    function __construct()
    {
        $this->dl = $this->model("khuchoi_m");
    }
    function Get_data()
    {
        $this->view('Masterlayout', [
            'page' => 'sua',
            'dulieu' => $this->dl->laydulieu()
        ]);
    }

    function xoa($id)
    {
        $kq = $this->dl->del($id);
        if ($kq)
            echo "<script>alert('Xóa thành công!')</script>";
        else
            echo "<script>alert('Xóa thất bại!')</script>";

        $this->view('Masterlayout', [
            'page' => 'home',
            'dulieu' => $this->dl->laydulieu()
        ]);
    }
    function sua($id)
    {
        $this->view('Masterlayout', [
            'page' => 'sua',
            'dulieu' => $this->dl->find1($id)
        ]);
    }

    function suadl()
    {

        if (isset($_POST['sua'])) {
            $mk = $_POST['makhu'];
            $tk = $_POST['tenkhu'];
            $dd = $_POST['diadiem'];
            $tt = $_POST['trangthai'];
            $tg = $_POST['thoigian'];
            //gọi hàm sủa dl tacgia_udp trong model
            $kq = $this->dl->vuichoi_update($mk, $tk, $dd, $tt, $tg);

            if ($kq) {
                echo "<script>alert('Sửa thành công!')</script>";
            } else
                echo "<script>alert('Sửa thất bại!')</script>";

            //Gọi lại giao diện và truyền $dulieu ra
            // $makhoa = $_POST['txtMaKhoa'];
            // $tenkhoa = $_POST['txtTenKhoa'];
            // $scbgd = $_POST['txtSCBGD'];
            // $dulieu = $this->ds->thi_find($makhoa, $tenkhoa);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout', [
                'page' => 'home',
                'dulieu' => $this->dl->laydulieu()

            ]);
        }
    }

    function timkiem()
    {
        if (isset($_POST['timkiem'])) {
            $makhu = $_POST['txttimkiem'];
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout', [
                'page' => 'home',
                'dulieu' => $this->dl->timkiem($makhu)
            ]);
        }
    }
}

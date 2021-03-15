<?php
namespace App\Controller;

use App\Model\PositionModel;

class PositionController
{
    protected $positionModel;

    public function __construct()
    {
        $this->positionModel = new PositionModel();
    }

    public function positionList()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $position_list = $this->positionModel->positionList();
            include "src/View/position/position-list.php";

            } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $search = $_POST['search'];
                $employee_list = $this->employeeModel->searchEmployee($search);
                include "src/View/employee/employee-list.php";
            }
    }

    public function delete($id)
    {
        $id= $_REQUEST['id'];
//        var_dump($id);
        $this->positionModel->delete($id);
        $this->positionList();
    }

    public function positionAdd()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $positions = $this->positionModel->positionList();
            include "src/View/position/position-add.php";
        }elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ma_chuc_vu = $_REQUEST['ma_chuc_vu'];
            $ten_chuc_vu = $_REQUEST['ten_chuc_vu'];
            $luong_co_ban = (int)$_REQUEST['luong_co_ban'];
            $tien_phu_cap = (int)$_REQUEST['tien_phu_cap'];
//            var_dump($ma_chuc_vu);
//            var_dump($ten_chuc_vu);
//            var_dump($luong_co_ban);
//            var_dump($tien_phu_cap);

            $this->positionModel->addPosition($ma_chuc_vu, $ten_chuc_vu, $luong_co_ban, $tien_phu_cap);
            header("location:index.php?page=position-list");
        }

    }

    public function positionUpdate()
    {
        if ($_SERVER["REQUEST_METHOD"]== 'GET')
        {
            $id = (int)$_REQUEST['id'];
            $position = $this->positionModel->positionDetail($id);
            include "src/View/position/position-update.php";
        }elseif ($_SERVER["REQUEST_METHOD"] == 'POST')
        {
            $ma_chuc_vu= (int)$_REQUEST['id'];
            $ten_chuc_vu= $_REQUEST['ten_chuc_vu'];
            $luong_co_ban= (int)$_REQUEST['luong_co_ban'];
            $tien_phu_cap= (int)$_REQUEST['tien_phu_cap'];
//            var_dump($ma_chuc_vu);
//            var_dump($ten_chuc_vu);
//            var_dump($luong_co_ban);
//            var_dump($tien_phu_cap);
            $this->positionModel->positionUpdate($ma_chuc_vu, $ten_chuc_vu, $luong_co_ban, $tien_phu_cap);
            header("location:index.php?page=department-list");

        }
    }
}




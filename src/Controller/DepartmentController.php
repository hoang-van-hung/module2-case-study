<?php
namespace App\Controller;

use App\Model\DepartmentModel;

class DepartmentController
{
    protected $departmentModel;

    public function __construct()
    {
        $this->departmentModel = new DepartmentModel();
    }

    public function departmentList()
    {

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $department_list = $this->departmentModel->departmentList();
            include "src/View/department/department-list.php";

            /*} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $search = $_POST['search'];
                $employee_list = $this->employeeModel->searchEmployee($search);
                include "src/View/employee/employee-list.php";
            }*/
        }
    }
    public function departmentAdd()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $positions = $this->departmentModel->departmentList();
            include "src/View/department/department-add.php";
        }elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ma_phong_ban = $_REQUEST['ma_phong_ban'];
            $ten_phong_ban = $_REQUEST['ten_phong_ban'];
            $sdt = $_REQUEST['sdt'];
            $dia_chi = $_REQUEST['dia_chi'];
//            var_dump($ma_chuc_vu);
//            var_dump($ten_chuc_vu);
//            var_dump($luong_co_ban);
//            var_dump($tien_phu_cap);

            $this->departmentModel->departmentAdd($ma_phong_ban, $ten_phong_ban, $sdt, $dia_chi);
            header("location:index.php?page=department-list");
        }
    }

    public function departmentUpdate()
    {
        if ($_SERVER["REQUEST_METHOD"]== 'GET')
        {
            $id = (int)$_REQUEST['id'];
            $department = $this->departmentModel->departmentDetail($id);
//            var_dump($department);
            include "src/View/department/department-update.php";
        }elseif ($_SERVER["REQUEST_METHOD"] == 'POST')
        {
            $ma_phong_ban = $_REQUEST['id'];
            $ten_phong_ban = $_REQUEST['ten_phong_ban'];
            $sdt = $_REQUEST['sdt'];
            $dia_chi = $_REQUEST['dia_chi'];
//            var_dump($ma_chuc_vu);
//            var_dump($ten_chuc_vu);
//            var_dump($luong_co_ban);
//            var_dump($tien_phu_cap);

            $this->departmentModel->departmentUpdate($ma_phong_ban, $ten_phong_ban, $sdt, $dia_chi);
            header("location:index.php?page=department-list");

        }
    }

    public function departmentDelete($id)
    {
        $id= $_REQUEST['id'];
        $this->departmentModel->delete($id);
        $this->departmentList();
    }
}


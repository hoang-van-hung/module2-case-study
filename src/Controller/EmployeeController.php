<?php
namespace App\Controller;

use App\Model\DepartmentModel;
use App\Model\EmployeeModel;
use App\Model\PositionModel;

class EmployeeController
{
    protected $employeeModel;
    protected $departmentModel;
    protected $positionModel;

    public function __construct()
    {
        $this->employeeModel = new EmployeeModel();
        $this->departmentModel = new DepartmentModel();
        $this->positionModel = new PositionModel();
    }

    public function employeeList()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $employee_list = $this->employeeModel->getAll();
            include "src/View/employee/employee-list.php";

        }else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST['search'];
            $employee_list = $this->employeeModel->searchEmployee($search);
            include "src/View/employee/employee-list.php";
        }
    }

    public function show($id)
    {
        $employee = $this->employeeModel->detail($id);
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
            if ($id != 0)
            {
                $this->employeeModel->updateStatus($id);
                header("location:index.php?page=employee-list");
            }
        }
        include "src/View/employee/inforEmployee.php";
    }

    public function delete($id)
    {
        $employee = $this->employeeModel->findById($id);
        if ($_SERVER["REQUEST_METHOD"] == "GET")
        {
            $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
            if ($id != 0)
            {
                $this->employeeModel->delete($id);
                header("location:index.php?page=employee-list");
            }
        }
        include "src/View/employee/inforEmployee.php";
    }

    public function add()
    {

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $employees = $this->employeeModel->getAll();
            $department_list = $this->departmentModel->departmentAll();
            $position_list = $this->positionModel->getAll();
//            echo "<pre>";
//            var_dump($department_list);
            include "src/View/employee/addEmployee.php";

        }elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id= $_REQUEST['id'];
            $ho_ten = $_REQUEST['ho_ten'];
            $gioi_tinh = $_REQUEST['gioi_tinh'];
            $ngay_sinh = $_REQUEST['ngay_sinh'];
            $sdt = $_REQUEST['sdt'];
            $que_quan = $_REQUEST['que_quan'];
            $ma_phong_ban = (int)$_REQUEST['ma_phong_ban'];
            $ma_chuc_vu = (int)$_REQUEST['ma_chuc_vu'];
            $bang_cap = $_REQUEST['bang_cap'];
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp,'img/'.$img);
            var_dump($img);

            /*var_dump($ho_ten);
            var_dump($gioi_tinh);
            var_dump($ngay_sinh);
            var_dump($sdt);
            var_dump($que_quan);
            var_dump($ma_phong_ban);
            var_dump($ma_chuc_vu);
            var_dump($bang_cap);die();*/
            $result = $this->employeeModel->addEmployee($id, $ho_ten, $gioi_tinh, $img, $ngay_sinh, $sdt, $que_quan, $ma_phong_ban, $ma_chuc_vu, $bang_cap);
            header("location:index.php?page=employee-list");
        }
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id= $_REQUEST['id'];
            $employees = $this->employeeModel->getAll();
            include "src/View/employee/updateEmployee.php";
    }else if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $ho_ten = $_POST['ho_ten'];
            $gioi_tinh = $_POST['gioi_tinh'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $sdt = $_POST['sdt'];
            $que_quan = $_POST['que_quan'];
            $ma_phong_ban = (int)$_POST['ma_phong_ban'];
            $ma_chuc_vu = (int)$_POST['ma_chuc_vu'];
            $bang_cap = $_POST['bang_cap'];
            $this->employeeModel->update($ho_ten);
        }
    }


}

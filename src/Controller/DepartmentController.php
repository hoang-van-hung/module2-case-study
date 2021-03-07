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
            $department_list = $this->departmentModel->departmentAll();
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

    }
}


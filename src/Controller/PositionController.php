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
            include "src/View/position/positionList.php";

            /*} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $search = $_POST['search'];
                $employee_list = $this->employeeModel->searchEmployee($search);
                include "src/View/employee/employee-list.php";
            }*/
        }
    }
}

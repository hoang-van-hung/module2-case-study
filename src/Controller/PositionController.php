<?php
namespace App\Controller;

use App\Model\PositionModel;

class PositionController
{
    protected $PositionModel;

    public function __construct()
    {
        $this->PositionModel = new PositionModel();
    }

    public function positionList()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $position_list = $this->PositionModel->getAll();
            include "src/View/position/position.php";

            /*} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $search = $_POST['search'];
                $employee_list = $this->employeeModel->searchEmployee($search);
                include "src/View/employee/employee-list.php";
            }*/
        }
    }
}

<?php


namespace App\Controller;


use App\Model\SalaryModel;

class SalaryController
{
    protected $salaryModel;

    public function __construct()
    {
        $this->salaryModel = new SalaryModel();
    }

    public function salaryList()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $salary_list = $this->salaryModel->getAllSalary();
            echo "<pre>";
            var_dump($salary_list[0]);
            include "src/View/salary/salary-list.php";

        } /*else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST['search'];
            $salary_list = $this->salaryModel->getAllSalary();
            include "src/View/salary/salary-list.php";
        }*/
    }

}

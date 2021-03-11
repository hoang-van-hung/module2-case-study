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
            include "src/View/salary/salary-list.php";

        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST['search'];
            $salary_list = $this->salaryModel->searchSalary($search);
            include "src/View/salary/salary-list.php";
        }
    }

    public function showSalary($id)
    {
        $salary=$this->salaryModel->salaryDeetail($id);

        /*if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
            if ($id != 0)
            {
                $this->salaryModel->salaryDeetail($id);
                header("location:index.php?page=employee-list");
            }
        }*/
        include "src/View/salary/salary-detail.php";
    }









}

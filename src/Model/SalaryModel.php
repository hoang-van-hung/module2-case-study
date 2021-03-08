<?php

namespace App\Model;

class SalaryModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnection();
        $this->database = $db->connect();
    }

    public function getAllSalary()
    {

        $sql = "SELECT * FROM v_employee_salary order by id ASC";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
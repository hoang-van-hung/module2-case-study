<?php

namespace App\Model;
use PDO;
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
        $sql = "SELECT * FROM v_salary";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
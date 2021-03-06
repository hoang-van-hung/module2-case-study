<?php


namespace App\Model;
use PDO;

class DepartmentModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnection();
        $this->database = $db->connect();
    }

    public function departmentAll()
    {
        $sql = "SELECT * FROM departments";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
}

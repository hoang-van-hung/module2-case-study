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
        $sql = "SELECT id, ho_ten, (luong_co_ban + tien_phu_cap + so_tien_thuong - so_tien_phat - so_tien) as totalMoney FROM v_salary order by id";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function searchSalary($search)
    {
        $sql = "SELECT * FROM v_salary";
        if (!empty($search)) {
            $sql = "SELECT * FROM v_salary WHERE id  LIKE '%$search%' or ho_ten LIKE '%$search%' ";
        }
        $stmt = $this->database->prepare($sql);
        //$stmt->bindParam(":search", $search);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function salaryDeetail($id)
    {
        $sql = "select * from v_salary where id =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
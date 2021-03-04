<?php

namespace App\Model;

class EmployeeModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnection();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM employees";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function detail($id)
    {
        $sql = "select * from employees where id =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function searchEmployee($search)
    {
        $sql = "SELECT * FROM employees";
        if (!empty($search)) {
            $sql = "SELECT * FROM employees WHERE id =:search or ho_ten =:search";
        }
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":search", $search);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function updateStatus($ho_ten)
    {
        $sql = 'UPDATE employees SET ho_ten=:ho_ten WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":ho_ten", $ho_ten);
//        $stmt->bindParam(":gioi_tinh", $gioi_tinh);
//        $stmt->bindParam(":ngay_sinh", $ngay_sinh);
//        $stmt->bindParam(":sdt", $sdt);
//        $stmt->bindParam(":que_quan", $que_quan);
//        $stmt->bindParam(":ma_phong_ban", $ma_phong_ban);
//        $stmt->bindParam(":ma_chuc_vu", $ma_chuc_vu);
//        $stmt->bindParam(":bang_cap", $bang_cap);
        $stmt->execute();

    }

    public function addEmployee($ho_ten, $gioi_tinh, $ngay_sinh, $sdt, $que_quan, $ma_phong_ban, $ma_chuc_vu, $bang_cap)
    {

        $sql = 'INSERT INTO employees (ho_ten,gioi_tinh,ngay_sinh,sdt, que_quan, ma_phong_ban, ma_chuc_vu, bang_cap)
 VALUE (:ho_ten, :gioi_tinh, :ngay_sinh, :sdt, :que_quan,:ma_phong_ban,:ma_chuc_vu, :bang_cap)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(":ho_ten", $ho_ten);
        $stmt->bindValue(":gioi_tinh", $gioi_tinh);
        $stmt->bindValue(":ngay_sinh", $ngay_sinh);
        $stmt->bindValue(":sdt", $sdt);
        $stmt->bindValue(":que_quan", $que_quan);
        $stmt->bindValue(":ma_phong_ban", $ma_phong_ban);
        $stmt->bindValue(":ma_chuc_vu", $ma_chuc_vu);
        $stmt->bindValue(":bang_cap", $bang_cap);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM employees WHERE id =:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

}
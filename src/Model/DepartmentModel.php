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

    public function departmentList()
    {

        $sql = "SELECT * FROM departments";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function departmentDetail($id)
    {
//        var_dump($id);
        $sql ="SELECT * FROM departments where ma_phong_ban='$id'";
        $stmt = $this->database->prepare($sql);
//        $stmt->bindValue(":ma_phong_ban", $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM departments WHERE ma_phong_ban =:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function departmentAdd($ma_phong_ban, $ten_phong_ban, $sdt, $dia_chi)
    {
        $sql='INSERT INTO departments (ma_phong_ban, ten_phong_ban, sdt, dia_chi) VALUE (:ma_phong_ban, :ten_phong_ban, :sdt, :dia_chi)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":ma_phong_ban", $ma_phong_ban);
        $stmt->bindParam(":ten_phong_ban", $ten_phong_ban);
        $stmt->bindParam(":sdt", $sdt);
        $stmt->bindParam(":dia_chi", $dia_chi);
        $stmt->execute();
    }

    public function departmentUpdate($ma_phong_ban, $ten_phong_ban, $sdt, $dia_chi)
    {

        $sql ='UPDATE departments SET ten_phong_ban=:ten_phong_ban,
                     sdt=:sdt,dia_chi=:dia_chi where ma_phong_ban=:ma_phong_ban';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":ma_phong_ban", $ma_phong_ban);
        $stmt->bindParam(":ten_phong_ban", $ten_phong_ban);
        $stmt->bindParam(":sdt", $sdt);
        $stmt->bindParam(":dia_chi", $dia_chi);
        $stmt->execute();

    }
}

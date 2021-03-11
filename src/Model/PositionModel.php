<?php


namespace App\Model;
use PDO;

class PositionModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnection();
        $this->database = $db->connect();
    }

    public function positionList()
    {

        $sql = "SELECT * FROM positions";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function positionDetail($id)
    {
        $sql ="SELECT * FROM positions where ma_chuc_vu='$id'";
        $stmt = $this->database->prepare($sql);
//        $stmt->bindValue(":ma_chuc_vu", $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM positions WHERE ma_chuc_vu =:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function addPosition( $ma_chuc_vu,$ten_chuc_vu, $luong_co_ban, $tien_phu_cap)
    {
        $sql='INSERT INTO positions (ma_chuc_vu, ten_chuc_vu, luong_co_ban, tien_phu_cap) VALUE (:ma_chuc_vu, :ten_chuc_vu, :luong_co_ban, :tien_phu_cap)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":ma_chuc_vu", $ma_chuc_vu);
        $stmt->bindParam(":ten_chuc_vu", $ten_chuc_vu);
        $stmt->bindParam(":luong_co_ban", $luong_co_ban);
        $stmt->bindParam(":tien_phu_cap", $tien_phu_cap);
        $stmt->execute();

    }

    public function positionUpdate($ma_chuc_vu,$ten_chuc_vu, $luong_co_ban, $tien_phu_cap)
    {

        $sql ='UPDATE positions SET ten_chuc_vu=:ten_chuc_vu,
                     luong_co_ban=:luong_co_ban,tien_phu_cap=:tien_phu_cap where ma_chuc_vu=:ma_chuc_vu';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":ma_chuc_vu", $ma_chuc_vu);
        $stmt->bindParam(":ten_chuc_vu", $ten_chuc_vu);
        $stmt->bindParam(":luong_co_ban", $luong_co_ban);
        $stmt->bindParam(":tien_phu_cap", $tien_phu_cap);
        $stmt->execute();

    }


}
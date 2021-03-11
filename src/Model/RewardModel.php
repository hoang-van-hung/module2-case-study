<?php


namespace App\Model;
use PDO;

class RewardModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnection();
        $this->database = $db->connect();
    }

    public function rewardList()
    {

        $sql = "SELECT * FROM reward_detail";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function rewardDetail($id)
    {
        $sql ="SELECT * FROM reward_detail where ma_thuong='$id'";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function rewardDelete($id)
    {
        $sql = 'DELETE FROM reward_detail WHERE ma_thuong =:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function rewardAdd( $employee_id,$ma_khen_thuong)
    {
        $sql='INSERT INTO reward_detail (employee_id,ma_khen_thuong ) VALUE (:employee_id, :ma_khen_thuong)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":employee_id", $employee_id);
        $stmt->bindParam(":ma_khen_thuong", $ma_khen_thuong);
        $stmt->execute();

    }

    public function rewardUpdate($employee_id,$ma_khen_thuong)
    {

        $sql ='UPDATE reward_detail SET employee_id=:employee_id, ma_khen_thuong=:ma_khen_thuong';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":employee_id", $employee_id);
        $stmt->bindParam(":ma_khen_thuong", $ma_khen_thuong);
        $stmt->execute();

    }


}

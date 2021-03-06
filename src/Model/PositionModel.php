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

    public function getAll()
    {
        $sql = "SELECT * FROM positions order by ma_chuc_vu ASC";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
}
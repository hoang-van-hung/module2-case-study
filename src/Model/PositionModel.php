<?php


namespace App\Model;


class PositionModel
{
    public function getAll()
    {
        $sql = "SELECT * FROM positions";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
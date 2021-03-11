<?php

namespace App\Model;
use PDO;

class DBConnection
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        // Dashboard controller
        $this->dsn = 'mysql:host=127.0.0.1;dbname=employee_manage';
        $this->username = 'root';
        $this->password = '123456789';
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        }catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
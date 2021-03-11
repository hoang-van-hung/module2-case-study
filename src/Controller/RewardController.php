<?php
namespace App\Controller;


use App\Model\RewardModel;

class RewardController
{
    protected $rewardModel;

    public function __construct()
    {
        $this->rewardModel = new RewardModel();
    }

    public function rewardList()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $reward_list = $this->rewardModel->rewardList();
            include "src/View/reward/reward-list.php";

        }
    }

    public function delete($id)
    {
        $id= $_REQUEST['id'];
//        var_dump($id);
        $this->rewardModel->rewardDelete($id);
        $this->rewardList();
    }

    public function rewardAdd()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $reward_list = $this->rewardModel->rewardList();
            include "src/View/reward/reward-add.php";
        }elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $employee_id = $_REQUEST['employee_id'];
            $ma_khen_thuong = $_REQUEST['ma_khen_thuong'];

            $this->rewardModel->rewardAdd($employee_id, $ma_khen_thuong);
            header("location:index.php?page=reward-list");
        }

    }

    public function rewardUpdate()
    {
        if ($_SERVER["REQUEST_METHOD"]== 'GET')
        {
            $id = (int)$_REQUEST['id'];
            $reward = $this->rewardModel->rewardDetail($id);
            include "src/View/reward/reward-update.php";
        }elseif ($_SERVER["REQUEST_METHOD"] == 'POST')
        {
            $employee_id = $_REQUEST['employee_id'];
            $ma_khen_thuong = $_REQUEST['ma_khen_thuong'];
            $this->rewardModel->rewardUpdate($employee_id, $ma_khen_thuong);

        }
    }
}





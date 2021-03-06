<?php
ob_start();

use App\Controller\EmployeeController;
use App\Controller\PositionController;
use App\Controller\DepartmentController;

require __DIR__ . '/vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$employeeController = new EmployeeController();
$positionController =  new PositionController();
$departmentController = new DepartmentController();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>

<body>
<form method="POST" action="index.php" >
    <label for="search" class="form-label">What do you want to find?</label> <br>
    <input type="text" class="form-control" name="search">
    <button type="submit">Search</button>
</form>
<a href="index.php?page=employee-list">Danh sach nhan vien</a> <br>
<a href="index.php?page=employee-add">Them nhan vien</a> <br>
<a href="index.php?page=position-list">Chuc vu</a> <br>
<a href="index.php?page=department-list">Phong ban</a>
<br/>
<?php
switch ($page) {
    case 'employee-infor':
        $id = $_REQUEST['id'];
        $employeeController->show($id);
        break;

    case 'employee-add':
        $employeeController->add();
        break;
    case 'employee-update':
        $id = $_REQUEST['id'];
        $employeeController->update();
        break;

    case 'employee-delete':
        $id = $_REQUEST['id'];
        $employeeController->delete($id);
        break;

    case 'position-list':
        $positionController->positionList();
        break;
    case 'department-list':
        $departmentController->departmentList();
        break;

    default :
        $employeeController->employeeList();
        break;
}
ob_end_flush();
?>
</body>

</html>
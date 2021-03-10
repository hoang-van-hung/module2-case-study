<?php
ob_start();

use App\Controller\EmployeeController;
use App\Controller\PositionController;
use App\Controller\DepartmentController;

require __DIR__ . '/vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$employeeController = new EmployeeController();
$positionController = new PositionController();
$departmentController = new DepartmentController();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid" style="text-align: center">
        <a class="navbar-brand" href="#">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        EMPLOYEE
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?page=employee-list">Danh Sách Nhân Viên</a></li>
                        <li><a class="dropdown-item" href="#">Bảng Lương</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="index.php?page=employee-add">Thêm Nhân Viên</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Phòng Ban
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?page=department-list">Danh Sách Phòng Ban</a></li>
                        <li><a class="dropdown-item" href="index.php?page=department-add">Thêm Phòng Ban </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Chức Vụ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?page=position-list">Danh Sách Chức Vụ</a></li>
                        <li><a class="dropdown-item" href="index.php?page=position-add">Thêm Chức Vụ </a></li>
                    </ul>
                </li>

            </ul>
            <form class="d-flex" method="post">
                <input class="form-control me-2" type="search" placeholder="Nhập MNV hoặc tên NV" aria-label="Search"
                       name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

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

    case 'position-add':
        $positionController->positionAdd();
        break;

    case 'position-delete':
        $id = $_REQUEST['id'];
        $positionController->delete($id);
        break;

    case 'position-update':
        $id = $_REQUEST['id'];
        $positionController->positionUpdate();
        break;

    case 'department-list':
        $departmentController->departmentList();
        break;
    case 'department-add':
        $departmentController->departmentAdd();
        break;
    case 'department-delete':
        $id = $_REQUEST['id'];
        $departmentController->departmentDelete($id);
        break;
    case 'department-update':
        $id = $_REQUEST['id'];
        $departmentController->departmentUpdate($id);
        break;

    default :
        $employeeController->employeeList();
        break;
}
ob_end_flush();
?>
</body>

</html>
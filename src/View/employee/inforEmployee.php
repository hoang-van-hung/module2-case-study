<h2>Employee Information</h2>
<table class="table-list">
    <tr>
        <th>Employee ID</th>
        <td> <?php  echo $employee[0]['id'] ?></td>
    </tr>
    <tr>
        <th>Employee Name</th>
        <td> <?php  echo $employee[0]['ho_ten'] ?></td>
    </tr>
    <tr>
        <th>Male</th>
        <td> <?php  echo $employee[0]['gioi_tinh'] ?></td>
    </tr>
    <tr>
        <th>Date of Birth</th>
        <td> <?php  echo $employee[0]['ngay_sinh'] ?></td>
    </tr>
    <tr>
        <th>Phone Number</th>
        <td> <?php  echo $employee[0]['sdt'] ?></td>
    </tr>
    <tr>
        <th>HomeTown</th>
        <td> <?php  echo $employee[0]['que_quan'] ?></td>

    </tr>
    <tr>
        <th>Departments ID</th>
        <td> <?php  echo $employee[0]['ma_phong_ban'] ?></td>

    </tr>
    <tr>
        <th>Position ID</th>
        <td> <?php  echo $employee[0]['ma_chuc_vu'] ?></td>

    </tr>
    <tr>
        <th>Level</th>
        <td> <?php  echo $employee[0]['bang_cap'] ?></td>
    </tr>
    <td><button><a href="index.php?page=employee-update&id=<?php  echo $employee[0]['id'] ?>">Update</a></button></td>
    <td><button><a href="index.php?page=employee-delete&id=<?php  echo $employee[0]['id'] ?>">Delete</a></button></td>
</table>
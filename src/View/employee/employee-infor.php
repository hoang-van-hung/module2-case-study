<h2>Employee Information</h2>
<table class="table table-hover table-bordered border-primary" style="text-align: center">
    <tr>
        <th>Employee ID</th>
        <td> <?php echo $employee[0]['id'] ?></td>
    </tr>
    <tr>
        <th>Employee Name</th>
        <td> <?php echo $employee[0]['ho_ten'] ?></td>
    </tr>
    <tr>
        <th>Male</th>
        <td> <?php echo $employee[0]['gioi_tinh'] ?></td>
    </tr>
    <tr>
        <th>Date of Birth</th>
        <td> <?php echo $employee[0]['ngay_sinh'] ?></td>
    </tr>
    <tr>
        <th>Phone Number</th>
        <td> <?php echo $employee[0]['sdt'] ?></td>
    </tr>
    <tr>
        <th>HomeTown</th>
        <td> <?php echo $employee[0]['que_quan'] ?></td>

    </tr>
    <tr>
        <th>Departments ID</th>
        <td> <?php echo $employee[0]['ten_phong_ban'] ?></td>

    </tr>
    <tr>
        <th>Position ID</th>
        <td> <?php echo $employee[0]['ten_chuc_vu'] ?></td>

    </tr>
    <tr>
        <th>Level</th>
        <td> <?php echo $employee[0]['bang_cap'] ?></td>
    </tr>
</table>
<button class="btn btn-primary"><a href="index.php?page=employee-update&id=<?php echo $employee[0]['id'] ?>">Update</a>
</button>
<button class="btn btn-warning"><a
            onclick="return confirm('Do you want to delete this employee <?php echo $employee[0]['ho_ten'] ?>')"
            href="index.php?page=employee-delete&id=<?php echo $employee[0]['id'] ?>">Delete</a></button>
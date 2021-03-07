

<table class="employee-list">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Img</th>
        <th>Department</th>
        <th>Role</th>
        <th>Level</th>
    </tr>
    <?php foreach ($employee_list as $key=> $employee): ?>
    <tr>
        <td>
            <a href="index.php?page=employee-infor&id=<?php echo $employee['id']; ?>">
                <?php echo $employee['id']; ?></a>
        </td>
        <td><?php echo $employee['ho_ten'] ?></td>
        <td><img style="width: 100px" src="img/<?php echo $employee['img'] ?>"></td>
        <td><?php echo $employee['ten_phong_ban'] ?></td>
        <td><?php echo $employee['ten_chuc_vu'] ?></td>
        <td><?php echo $employee['bang_cap'] ?></td>
        <td>
        <td><button><a onclick="return confirm('Do you want to delete this employee <?php  echo $employee['ho_ten'] ?>')"
                       href="index.php?page=employee-delete&id=<?php  echo $employee['id'] ?>">Delete</a></button></td>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


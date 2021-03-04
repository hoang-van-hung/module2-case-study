

<table class="employee-list">
    <tr>
        <th>ID</th>
        <th>Ho ten</th>
        <th>Ma phong ban</th>
        <th>Ma chuc vu</th>
        <th>Bang cap</th>
    </tr>
    <?php foreach ($employee_list as $key=> $employee): ?>
        <tr>
            <td>
                <a href="index.php?page=employee-infor&id=<?php echo $employee['id']; ?>">
                    <?php echo $employee['id']; ?></a>
            </td>
            <td><?php echo $employee['ho_ten'] ?></td>
            <td><?php echo $employee['ma_phong_ban'] ?></td>
            <td><?php echo $employee['ma_chuc_vu'] ?></td>
            <td><?php echo $employee['bang_cap'] ?></td>
            <td><button><a href="index.php?page=employee-update&id=<?php  echo $employee[0]['id'] ?>">Update</a></button></td>
            <td><button><a href="index.php?page=employee-delete&id=<?php  echo $employee[0]['id'] ?>">Delete</a></button></td>

        </tr>
    <?php endforeach; ?>

</table>


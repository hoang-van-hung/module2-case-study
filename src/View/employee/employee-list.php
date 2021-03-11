<table class="table table-hover table-bordered border-primary" style="text-align: center">
    <tr>
        <th>Mã Nhân viên</th>
        <th>Họ và Tên</th>
        <th>Hình Ảnh</th>
        <th>Phòng Ban</th>
        <th>Vị Trí</th>
        <th>Bằng Cấp</th>
        <th>Action</th>
    </tr>
    <?php foreach ($employee_list as $key => $employee): ?>
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
                <button type="submit" class="btn btn-warning"><a
                            onclick="return confirm('Do you want to delete this employee <?php echo $employee['ho_ten'] ?>')"
                            href="index.php?page=employee-delete&id=<?php echo $employee['id'] ?>">Delete</a></button>
            </td>

        </tr>
    <?php endforeach; ?>
</table>



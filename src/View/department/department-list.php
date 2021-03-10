<table class="table table-hover table-bordered border-primary" style="width: 80%; text-align: center;margin: auto">
    <tr>
        <th>Mã Phòng Ban</th>
        <th>Tên Phòng Ban</th>
        <th>Số Điện Thoại</th>
        <th>Địa Chỉ</th>
        <th>Action</th>
    </tr>
    <?php foreach ($department_list as $key=> $department): ?>
        <tr>
            <td>
                    <?php echo $department['ma_phong_ban']; ?>
            </td>
            <td><?php echo $department['ten_phong_ban']; ?></td>
            <td><?php echo $department['ma_phong_ban']; ?></td>
            <td><?php echo $department['ma_phong_ban']; ?></td>
            <td><button class="btn btn-primarykey">
                    <a href="index.php?page=department-update&id=<?php echo $department['ma_phong_ban']; ?>">Update</a>

                <button class="btn btn-warning">
                    <a  onclick="return confirm('Do you want to delete department <?php echo $department['ten_phong_ban']; ?>')"
                            href="index.php?page=department-delete&id=<?php echo $department['ma_phong_ban']; ?>">Delete</a>
                </button>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

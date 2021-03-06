<table class="employee-list">
    <tr>
        <th>Ma phong ban</th>
        <th>Ten phong ban</th>
        <th>So dien thoai</th>
        <th>Dia chi</th>
    </tr>
    <?php foreach ($department_list as $key=> $department): ?>
        <tr>
            <td>
                <a href="index.php?page=employee-infor&id=<?php echo $department['ma_phong_ban']; ?>">
                    <?php echo $department['ma_phong_ban']; ?></a>
            </td>
            <td><?php echo $department['ten_phong_ban']; ?></td>
            <td><?php echo $department['ma_phong_ban']; ?></td>
            <td><?php echo $department['ma_phong_ban']; ?></td>
            <td><button><a href="index.php?page=position-update&id=<?php echo $department[0]['ma_phong_ban']; ?>">Update</a></button></td>
            <td><button><a href="index.php?page=position-delete&id=<?php echo $department[0]['ma_phong_ban']; ?>">Delete</a></button></td>
        </tr>
    <?php endforeach; ?>

    <select class="form-select" id="supplier_id" name="ma_phong_ban" required="">
        <option value="">----</option>
        <?php
        foreach ($department_list as $key=> $department) : ?>
            <option value="<?php echo $department['ma_phong_ban']; ?>"><?php echo $department['ten_phong_ban']; ?></option>
        <?php endforeach; ?>
    </select>

</table>

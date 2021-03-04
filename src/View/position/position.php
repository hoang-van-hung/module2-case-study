<table class="employee-list">
    <tr>
        <th>Ma chuc vu</th>
        <th>Ten chuc vu</th>
        <th>Luong co ban</th>
        <th>Tien phu cap</th>
    </tr>
    <?php foreach ($position_list as $key=> $position): ?>
        <tr>
            <td>
                <a href="index.php?page=employee-infor&id=<?php echo $position['ma_chuc_vu']; ?>">
                    <?php echo $position['ma_chuc_vu']; ?></a>
            </td>
            <td><?php echo $position['ten_chuc_vu']; ?></td>
            <td><?php echo $position['luong_co_ban']; ?></td>
            <td><?php echo $position['tien_phu_cap']; ?></td>
            <td><button><a href="index.php?page=employee-update&id=<?php echo $position[0]['ma_chuc_vu']; ?>">Update</a></button></td>
            <td><button><a href="index.php?page=employee-delete&id=<?php echo $position[0]['ma_chuc_vu']; ?>">Delete</a></button></td>

        </tr>
    <?php endforeach; ?>

</table>

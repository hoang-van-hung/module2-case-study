
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
                <a><?php echo $position['ma_chuc_vu']; ?></a>
            </td>
            <td><?php echo $position['ten_chuc_vu']; ?></td>
            <td><?php echo $position['luong_co_ban']; ?></td>
            <td><?php echo $position['tien_phu_cap']; ?></td>
            <td><button><a href="index.php?page=position-update&id=<?php echo $position['ma_chuc_vu']; ?>">Update</a></button></td>
            <td><button><a onclick="return confirm('Do you want to delete position <?php  echo $position['ten_chuc_vu']; ?>')"
                           href="index.php?page=position-delete&id=<?php  echo $position['ma_chuc_vu'] ?>">Delete</a></button></td>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

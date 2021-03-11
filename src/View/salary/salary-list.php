<table class="table table-hover table-bordered border-primary" style="margin:auto;width: 60%; text-align: center;margin-top: 40px">
    <tr>
        <th>Mã Nhân Viên</th>
        <th>Tên Nhân Viên</th>
        <th>Lương Thực Tế</th>
    </tr>
    <?php foreach ($salary_list as $key=> $salary): ?>
        <tr>
            <td>
                <a href="index.php?page=salary-detail&id=<?php echo $salary['id']; ?>">
                    <?php echo $salary['id']; ?></a>
            </td>
            <td><?php echo $salary['ho_ten']; ?></td>
            <td><?php echo $salary['totalMoney']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>


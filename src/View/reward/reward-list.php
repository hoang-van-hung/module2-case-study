
<table class="table table-hover table-bordered border-primary" style="width: 80%; text-align: center;margin:auto;margin-top: 40px">
    <tr>
        <th>Mã Chức Vụ</th>
        <th>Tên Chức Vụ</th>
        <th>Lương Cơ Bản</th>
        <th>Tiền Phụ Cấp</th>
        <th>Action</th>
    </tr>
    <?php foreach ($reward_list as $key=> $reward): ?>
        <tr>
            <div class="col-md-2">
                <td>
                    <a><?php echo $reward['ma_thuong']; ?></a>
                </td>
            </div>
            <div class="col-md-1">
                <td>
                    <a><?php echo $reward['employee_id']; ?></a>
                </td>
            </div>

            <div class="col-md-2">
                <td>
                    <a><?php echo $reward['ma_khen_thuong']; ?></a>
                </td>
            </div>
            <td><button class="btn btn-warning">
                    <a href="index.php?page=reward-update&id=<?php echo $reward['ma_thuong']; ?>">Update</a>
                </button>
                <button class="btn btn-warning">
                    <a onclick="return confirm('Do you want to delete this reward ?')"
                       href="index.php?page=reward-delete&id=<?php echo $reward['ma_thuong']; ?>">Delete</a>
                </button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


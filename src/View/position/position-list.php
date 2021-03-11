
<table class="table table-hover table-bordered border-primary" style="width: 80%; text-align: center;margin:auto;margin-top: 40px">
    <tr>
        <th>Mã Chức Vụ</th>
        <th>Tên Chức Vụ</th>
        <th>Lương Cơ Bản</th>
        <th>Tiền Phụ Cấp</th>
        <th>Action</th>
    </tr>
    <?php foreach ($position_list as $key=> $position): ?>
        <tr>
            <div class="col-md-1">
                <td>
                    <a><?php echo $position['ma_chuc_vu']; ?></a>
                </td>
            </div>

            <div class="col-md-2">
                <td>
                    <a><?php echo $position['ten_chuc_vu']; ?></a>
                </td>
            </div>

            <div class="col-md-1">
                <td>
                    <a><?php echo $position['luong_co_ban']; ?></a>
                </td>
            </div>

            <div class="col-md-1">
                <td>
                    <a><?php echo $position['tien_phu_cap']; ?></a>
                </td>
            </div>

            <td><button class="btn btn-warning">
                    <a href="index.php?page=position-update&id=<?php echo $position['ma_chuc_vu']; ?>">Update</a>
                </button>
                <button class="btn btn-warning">
                    <a onclick="return confirm('Do you want to delete position <?php  echo $position['ten_chuc_vu']; ?>')"
                       href="index.php?page=position-delete&id=<?php  echo $position['ma_chuc_vu'] ?>">Delete</a>
                </button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

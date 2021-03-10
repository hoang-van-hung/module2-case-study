
<table class="table table-hover table-bordered border-primary" style="width: 80%; text-align: center;margin: auto">
    <tr>
        <th>Ma chuc vu</th>
        <th>Ten chuc vu</th>
        <th>Luong co ban</th>
        <th>Tien phu cap</th>
        <th colspan="2" class="col">Action</th>
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

            <td><button class="btn btn-primarykey">
                    <a href="index.php?page=position-update&id=<?php echo $position['ma_chuc_vu']; ?>">Update</a>
                </button></td>
            <td><button class="btn btn-warning">
                    <a onclick="return confirm('Do you want to delete position <?php  echo $position['ten_chuc_vu']; ?>')"
                           href="index.php?page=position-delete&id=<?php  echo $position['ma_chuc_vu'] ?>">Delete</a>
                </button></td>
        </tr>
    <?php endforeach; ?>
</table>

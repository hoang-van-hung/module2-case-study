
<div class="container" style="width: 68%">
    <div class="row">
        <div class="col-6">
            <div class="card" style="width: 20rem;">
                <img style="width: 300px" src="img/<?php echo $employee[0]['img'] ?>" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">Mã Nhân Viên :<?php echo $employee[0]['id'] ?></p>
                    <p class="card-text">Họ và Tên :<?php echo $employee[0]['ho_ten'] ?></p>
                    <button class="btn btn-warning"><a href="index.php?page=employee-update&id=<?php echo $employee[0]['id'] ?>">Update</a></button>
                    <button class="btn btn-warning">
                        <a onclick="return confirm('Do you want to delete this employee <?php echo $employee[0]['ho_ten'] ?>')"
                           href="index.php?page=employee-delete&id=<?php echo $employee[0]['id'] ?>">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card-body">
                <p class="card-text">Giới Tính : </p>
                <p class="card-text">Ngày Sinh : </p>
                <p class="card-text">Số Điện Thoại : </p>
                <p class="card-text">Quê Quán : </p>
                <p class="card-text">Phòng Ban: </p>
                <p class="card-text">Chức Vụ : </p>
                <p class="card-text">Bằng Cấp : </p>
            </div>
        </div>
        <div class="col-3">
            <div class="card-body">
                <p class="card-text"><?php echo $employee[0]['gioi_tinh'] ?></p>
                <p class="card-text"><?php echo $employee[0]['ngay_sinh'] ?></p>
                <p class="card-text"><?php echo $employee[0]['sdt'] ?></p>
                <p class="card-text"><?php echo $employee[0]['que_quan'] ?></p>
                <p class="card-text"><?php echo $employee[0]['ten_phong_ban'] ?></p>
                <p class="card-text"><?php echo $employee[0]['ten_chuc_vu'] ?></p>
                <p class="card-text"><?php echo $employee[0]['bang_cap'] ?></p>
            </div>
        </div>
    </div>
</div>

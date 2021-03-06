<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Update Employee's Information</h1>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="ho_ten" class="form-label">Ho ten</label>
                    <input type="text" class="form-control" id="ho_ten" name="ho_ten" placeholder="" value="<?php echo $employee[0]['ho_ten'] ?>" >
                </div>
                <div class="form-group">
                    <label for="gioi_tinh" class="form-label">Gioi tinh</label>
                    <select name="gioi_tinh" id="gioi_tinh">
                        <option value="<?php echo $employee[0]['gioi_tinh'] ?>"><?php echo $employee[0]['ho_ten'] ?></option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="ngay_sinh" class="form-label">Ngay sinh</label>
                    <input type="date" class="form-control" id="ngay sinh" name="ngay_sinh" placeholder="" value="<?php echo $employee[0]['ngay_sinh'] ?>">
                </div>
                <div class="form-group">
                    <label for="sdt" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="sdt" name="sdt" placeholder="" value="<?php echo $employee[0]['sdt'] ?>">
                </div>
                <div class="form-group">
                    <label for="ten_phong_ban" class="form-label">Phong ban</label>
                    <select class="form-select" id="ten_phong_ban" name="ten_phong_ban">
                        <option value="">----</option>
                        <?php
                        foreach ($department_list as $department) : ?>
                            <option value="<?php echo $department['ma_phong_ban'] ?>"><?php echo $department['ten_phong_ban'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ten_chuc_vu" class="form-label">Chuc vu</label>
                    <select class="form-select" id="ten_chuc_vu" name="ten_chuc_vu" required="">
                        <option value="">----</option>
                        <?php
                        foreach ($position_list as $position) : ?>
                            <option value="<?php echo $position['ma_chuc_vu']; ?>"><?php echo $position['ten_chuc_vu']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bang_cap" class="form-label">Bang cap</label>
                    <select class="form-select" id="bang_cap" name="bang_cap" required="">
                        <option value="<?php echo $employee[0]['bang_cap'] ?>"><?php echo $employee[0]['bang_cap'] ?></option>
                        <option value="Thac si">Thac si</option>
                        <option value="Tien si">Tien si</option>
                        <option value="Dai hoc">Dai hoc</option>
                        <option value="Cao dang">Cao dang</option>
                        <option value="Trung cap">Trung cap</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="img" class="form-label">Img</label>
                    <input type="file" name="old_img" value="<?php echo $employee[0]['img'] ?>">
                    <input type="file" class="form-control" id="img" name="img" placeholder="" value="<?php echo $employee[0]['img'] ?>">
                </div>

                <button type="submit" class="btn btn-primary">Update Information</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Update Information</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label for="product_code" class="form-label">Ho ten</label>
                    <input type="text" class="form-control" id="ho_ten" name="ho_ten" value=" <?php  echo $employee[0]['ho_ten'] ?>" >
                </div>
                <div class="form-group">
                    <label for="product_name" class="form-label">Gioi tinh</label>
                    <input type="text" class="form-control" id="Gioi tinh" name="gioi_tinh" value="<?php  echo $employee[0]['gioi_tinh'] ?>">
                </div>
                <div class="form-group">
                    <label for="list_price" class="form-label">Ngay sinh</label>
                    <input type="text" class="form-control" id="ngay sinh" name="ngay_sinh" value=" <?php  echo $employee[0]['ngay_sinh'] ?>">
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="sdt" value="<?php  echo $employee[0]['sdt'] ?>">
                </div>
                <div class="form-group">
                    <label for="que_quan" class="form-label">Que quan</label>
                    <input type="text" class="form-control" id="que_quan" name="que_quan" value="<?php  echo $employee[0]['que_quan'] ?>">
                </div>
                <div class="form-group">
                    <label for="supplier_id" class="form-label">Phong ban</label>
                    <select class="form-select" id="supplier_id" name="ma_phong_ban">
                        <option value="">----</option>
                        <?php
                        foreach ($departments as $key => $department) : ?>
                            <option value="$department['ma_phong_ban']"><?php echo $department['ten_phong_ban'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="supplier_id" class="form-label">Chuc vu</label>
                    <select class="form-select" id="supplier_id" name="ma_chuc_vu" required="">
                        <option value="">----</option>
                        <?php
                        foreach ($positions as $key => $position) : ?>
                            <option value="$position['ma_chuc_vu']"><?php echo $position['ten_chuc_vu'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bang_cap" class="form-label">Bang cap</label>
                    <select class="form-select" id="bang_cap" name="bang_cap" required="">
                        <option value="Thac si">Thac si</option>
                        <option value="Tien si">Tien si</option>
                        <option value="Dai hoc">Dai hoc</option>
                        <option value="Cao dang">Cao dang</option>
                        <option value="Trung cap">Trung cap</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 40px;margin:auto">
    <main>
        <div class="row g-3">
            <div class="col-md-12 col-lg-12">
                <h4 class="mb-3">Add Employee</h4>
                <form class="needs-validation"  method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="ho_ten" class="form-label">Tên Nhân Viên</label>
                            <input type="text" class="form-control" id="ho_ten" name="ho_ten" placeholder="" value="" >
                        </div>

                        <div class="col-sm-6">
                            <label for="gioi_tinh" class="form-label">Giới Tính</label> <br>
                            <select name="gioi_tinh" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option value="nam">Nam</option>
                                <option value="nu">Nữ</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="ngay_sinh" class="form-label">Ngày Sinh</label>
                            <input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" placeholder="" value="">
                        </div>
                        <div class="col-md-4">
                            <label for="sdt" class="form-label">Số Điện Thoại</label>
                            <input type="text" class="form-control" id="sdt" name="sdt" placeholder="" value="">
                        </div>
                        <div class="col-md-4">
                            <label for="que_quan" class="form-label">Quê Quán</label>
                            <input type="text" class="form-control" id="que_quan" name="que_quan" placeholder="" value="">
                        </div>
                        <div class="col-md-6">

                            <label for="ma_phong_ban" class="form-label">Phòng Ban</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="ma_phong_ban">
                                <option value="">----</option>
                                <?php
                                foreach ($department_list as $department) : ?>
                                    <option value="<?php echo $department['ma_phong_ban'] ?>"><?php echo $department['ten_phong_ban'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">

                            <label for="ma_chuc_vu" class="form-label">Chức Vụ</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="ma_chuc_vu">
                                <option value="">----</option>
                                <?php
                                foreach ($position_list as $position) : ?>
                                    <option value="<?php echo $position['ma_chuc_vu']; ?>"><?php echo $position['ten_chuc_vu']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-4">

                            <label for="bang_cap" class="form-label">Bằng Cấp</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="bang_cap">
                                <option value="Thạc Sĩ">Thạc Sĩ</option>
                                <option value="Tiến Sĩ">Tiến Sĩ</option>
                                <option value="Đại Học">Đại Học</option>
                                <option value="Cao Đẳng">Cao Đẳng</option>
                                <option value="Trung Cấp">Trung Cấp</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="img" class="form-label">Img</label>
                            <input type="file" class="form-control" id="img" name="img" placeholder="" value="">
                        </div>

                    </div>
                    <hr class="col-md-4">
                    <button class="btn btn-primary" type="submit">Add Employee</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </main>
</div>


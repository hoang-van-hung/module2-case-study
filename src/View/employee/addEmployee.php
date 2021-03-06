<!--<div class="container" style="margin-top: 70px;">
    <main>
        <div class="row g-3">
            <div class="col-md-12 col-lg-12">
                <h4 class="mb-3">Add Employee</h4>
                <form class="needs-validation" novalidate="" method="POST">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="product_code" class="form-label">Ho ten</label>
                            <input type="text" class="form-control" id="ho_ten" name="ho_ten" placeholder="" value="To Huu" >
                        </div>

                        <div class="col-sm-6">
                            <label for="product_name" class="form-label">Gioi tinh</label>
                            <input type="text" class="form-control" id="Gioi tinh" name="gioi_tinh" placeholder="" value="nam">
                        </div>

                        <div class="col-md-3">
                            <label for="list_price" class="form-label">Ngay sinh</label>
                            <input type="text" class="form-control" id="ngay sinh" name="ngay_sinh" placeholder="" value="13-06-1984">
                        </div>
                        <div class="col-md-3">
                            <label for="discontinued" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="discontinued" name="sdt" placeholder="" value="0986892832">
                        </div>
                        <div class="col-md-3 col-md-offset-3">
                            <label for="standard_cost" class="form-label">Que Quan</label>
                            <input type="text" class="form-control" id="standard_cost" name="que_quan" placeholder="" value="Hai Trieu, Nam Dinh">
                        </div>
                        <div class="col-md-6">

                            <label for="supplier_id" class="form-label">Phong ban</label>
                            <select class="form-select" id="supplier_id" name="ma_phong_ban" required="">
                                <option value="">----</option>
                                <?php
/*                                foreach ($departments as $key => $department) : */?>
                                    <option value="$department['ma_phong_ban']"><?php /*echo $department['ten_phong_ban'] */?></option>
                                <?php /*endforeach; */?>
                            </select>
                        </div>
                        <div class="col-md-6">

                            <label for="supplier_id" class="form-label">Chuc vu</label>
                            <select class="form-select" id="supplier_id" name="ma_chuc_vu" required="">
                                <option value="">----</option>
                                <?php
/*                                foreach ($positions as $key => $position) : */?>
                                    <option value="$position['ma_chuc_vu']"><?php /*echo $position['ten_chuc_vu'] */?></option>
                                <?php /*endforeach; */?>
                            </select>
                        </div>
                        <div class="col-md-6">

                            <label for="bang_cap" class="form-label">Bang cap</label>
                            <select class="form-select" id="bang_cap" name="bang_cap" required="">
                                <option value="Thac si">Thac si</option>
                                <option value="Tien si">Tien si</option>
                                <option value="Dai hoc">Dai hoc</option>
                                <option value="Cao dang">Cao dang</option>
                                <option value="Trung cap">Trung cap</option>
                            </select>
                        </div>

                    </div>
                    <hr class="my-4">
                    <button class="btn btn-primary btn-lg" type="submit">Add Employee</button>
                </form>
            </div>
        </div>
    </main>
</div>-->

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Add New Employee</h1>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="" value="" >
                </div>
                <div class="form-group">
                    <label for="ho_ten" class="form-label">Ho ten</label>
                    <input type="text" class="form-control" id="ho_ten" name="ho_ten" placeholder="" value="To Huu" >
                </div>
                <div class="form-group">
                    <label for="gioi_tinh" class="form-label">Gioi tinh</label>
                    <select name="gioi_tinh" id="gioi_tinh">
                        <option value="nam">Nam</option>
                        <option value="nu">Nu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="img" class="form-label">Img</label>
                    <input type="file" class="form-control" id="img" name="img" placeholder="" value="">
                </div>
                <div class="form-group">
                    <label for="ngay_sinh" class="form-label">Ngay sinh</label>
                    <input type="date" class="form-control" id="ngay sinh" name="ngay_sinh" placeholder="" value="13-06-1984">
                </div>
                <div class="form-group">
                    <label for="sdt" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="sdt" name="sdt" placeholder="" value="0986892832">
                </div>
                <div class="form-group">
                    <label for="ma_phong_ban" class="form-label">Phong ban</label>
                    <select class="form-select" id="ma_phong_ban" name="ma_phong_ban" required="">
                        <option value="">----</option>
                        <?php
                        foreach ($department_list as $department) : ?>
                            <option value="<?php echo $department['ma_phong_ban'] ?>"><?php echo $department['ten_phong_ban'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ma_chuc_vu" class="form-label">Chuc vu</label>
                    <select class="form-select" id="ma_chuc_vu" name="ma_chuc_vu" required="">
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
                        <option value="Thac si">Thac si</option>
                        <option value="Tien si">Tien si</option>
                        <option value="Dai hoc">Dai hoc</option>
                        <option value="Cao dang">Cao dang</option>
                        <option value="Trung cap">Trung cap</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add Employee</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>
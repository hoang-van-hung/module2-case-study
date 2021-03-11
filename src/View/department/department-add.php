
<div class="container" style="margin-top: 40px;margin:auto">
    <main>
        <div class="row g-3">
            <div class="col-md-12 col-lg-12">
                <h4 class="mb-3">Add Department</h4>
                <form class="needs-validation"  method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="ma_phong_ban" class="form-label">Mã Phòng Ban</label>
                            <input type="text" class="form-control" id="ma_phong_ban" name="ma_phong_ban" placeholder="" value="" >
                        </div>

                        <div class="col-sm-6">
                            <label for="ten_phong_ban" class="form-label">Tên Phòng Ban</label>
                            <input type="text" class="form-control" id="ten_phong_ban" name="ten_phong_ban" placeholder="" value="" >
                        </div>

                        <div class="col-sm-6">
                            <label for="sdt" class="form-label">Số Điện Thoại</label>
                            <input type="number" class="form-control" id="sdt" name="sdt" placeholder="" value="" >
                        </div>

                        <div class="col-sm-6">
                            <label for="dia_chi" class="form-label">Địa Chỉ</label>
                            <input type="text" class="form-control" id="dia_chi" name="dia_chi" placeholder="" value="" >
                        </div>

                    </div>
                    <hr class="col-md-4">
                    <button class="btn btn-primary" type="submit">Add Department</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </main>
</div>





<div class="container" style="margin-top: 40px;margin:auto">
    <main>
        <div class="row g-3">
            <div class="col-md-12 col-lg-12">
                <h4 class="mb-3">Add Position</h4>
                <form class="needs-validation"  method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="ma_chuc_vu" class="form-label">Mã Chức Vụ</label>
                            <input type="text" class="form-control" id="ma_chuc_vu" name="ma_chuc_vu" placeholder="" value="" >
                        </div>

                        <div class="col-sm-6">
                            <label for="ten_chuc_vu" class="form-label">Tên Chức Vụ</label>
                            <input type="text" class="form-control" id="ten_chuc_vu" name="ten_chuc_vu" placeholder="" value="" >
                        </div>

                        <div class="col-sm-6">
                            <label for="luong_co_ban" class="form-label">Lương Cơ Bản</label>
                            <input type="number" class="form-control" id="luong_co_ban" name="luong_co_ban" placeholder="" value="" >
                        </div>

                        <div class="col-sm-6">
                            <label for="tien_phu_cap" class="form-label">Tiền Phụ Cấp</label>
                            <input type="text" class="form-control" id="tien_phu_cap" name="tien_phu_cap" placeholder="" value="" >
                        </div>

                    </div>
                    <hr class="col-md-4">
                    <button class="btn btn-primary" type="submit">Add Position</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </main>
</div>



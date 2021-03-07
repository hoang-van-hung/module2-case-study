
<form method="post">
    <h3>Update Position</h3>
    <label for="ma_chuc_vu">Ma Chuc Vu: <?php echo $position[0]['ma_chuc_vu'] ?> </label>
    <input type="hidden" name="ma_chuc_vu"  value="<?php echo $position[0]['ma_chuc_vu'] ?>"> <br>

    <label for="ten_chuc_vu">Ten Chuc Vu</label>
    <input type="text" name="ten_chuc_vu"> <br>

    <label for="luong_co_ban">Luong co ban</label>
    <input type="text" name="luong_co_ban"> <br>

    <label for="tien_phu_cap">Tien phu cap</label>
    <input type="text" name="tien_phu_cap"> <br>

    <button type="submit">Update Information</button>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
</form>



<table class="table table-hover table-bordered border-primary" style="width: 100%; text-align: center;margin: auto">
    <tr>
        <th>Mã Nhân Viên</th>
        <th>Tên Nhân Viên</th>
        <th>Lương Cơ Bản</th>
        <th>Tiền Phụ Cấp</th>
        <th>Tên Khen Thưởng</th>
        <th>Tiền Khen Thưởng</th>
        <th>Tên Kỷ Luật</th>
        <th>Tiền Kỷ Luật</th>
        <th>Tên Bảo Hiểm</th>
        <th>Số Tiền Bảo Hiểm</th>
    </tr>
        <tr>
            <td><?php echo $salary[0]['id'] ?></td>
            <td><?php echo $salary[0]['ho_ten']; ?></td>
            <td><?php echo $salary[0]['luong_co_ban']; ?></td>
            <td><?php echo $salary[0]['tien_phu_cap']; ?></td>
            <td><?php echo $salary[0]['ten_khen_thuong']; ?></td>
            <td><?php echo $salary[0]['so_tien_thuong']; ?></td>
            <td><?php echo $salary[0]['ten_ky_luat']; ?></td>
            <td><?php echo $salary[0]['so_tien_phat']; ?></td>
            <td><?php echo $salary[0]['ten_goi']; ?></td>
            <td><?php echo $salary[0]['so_tien']; ?></td>
        </tr>
</table>



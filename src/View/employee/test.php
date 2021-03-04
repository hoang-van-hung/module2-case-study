<?php
foreach ($departments as $key => $department) :  var_dump($department['ma_phong_ban']);die();?>

    <option value="$department['ma_phong_ban']"><?php echo $department['ten_phong_ban'] ?></option>
<?php endforeach; ?>
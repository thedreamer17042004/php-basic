<?php
$accounts = [
    ['name' => 'Nguyễn Huy Hoàng','email' => 'hoannh@gmail.com','phone'=>'0986523648'],
    ['name' => 'Trần  Đình Hậu','email' => 'hautd@gmail.com','phone'=>'0987456158'],
    ['name' => 'Võ Hoài Nam','email' => 'namvh158@gmail.com','phone'=>'098412575'],
    ['name' => 'Cao Mai Linh','email' => 'linhcao@gmail.com','phone'=>'0965478245'],
    ['name' => 'Hỗ Ngọc Hòa','email' => 'hoahng@gmail.com','phone'=>'0965236897'],
    ['name' => 'Cao Sỹ Phúc','email' => 'phuccsao@gmail.com','phone'=>'0912548796'],
    ['name' => 'Mai Như Quỳnh','email' => 'quynhcm@gmail.com','phone'=>'0912045587'],
    ['name' => 'Trần Tiến Đạt','email' => 'dattt@gmail.com','phone'=>'0943898989']
];
?>

<?php foreach($accounts as $acc) : ?>
<tr>
    <td><?php echo $acc['name'];?></td>
    <td><?php echo $acc['email'];?></td>
    <td><?php echo $acc['phone'];?></td>
</tr>
<?php endforeach; ?>
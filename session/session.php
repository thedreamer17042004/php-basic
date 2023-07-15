<?php 
session_start(); // khởi tạo session
// sử dụng biến supper global $_SESSION để lưu thông tin bạn muốn
$_SESSION['name'] = 'Hoàng Bảo Minh'; // lưu dữ liệu cơ bản
// lưu một mảng nhiều thông tin
$_SESSION['profile'] = ['name' => 'Bảo Minh','email' => 'minhbm@gmail.com'];
?>

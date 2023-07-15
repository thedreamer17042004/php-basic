<?php
session_start(); // khởi tạo session
// session_destroy(); // hủy tất tần tật các session đã lưu
// Có thể sử dụng hàm unset để loại bỏ phần tử của mảng $_SESSION
unset($_SESSION['name']);
unset($_SESSION['profile']);
?>

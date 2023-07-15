<?php 
session_start(); // khởi tạo session

// sử dụng biến supper global $_SESSION để lấy thông tin đã lưu
// khi truy cập các phần tử của _SESSION, hãy sử dụng isset() hoặc !empty() để kiểm tra key
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$profile = isset($_SESSION['profile']) ? $_SESSION['profile'] : '';
?>
<h1>Hello: <?php echo $name;?></h1>
<h1>Profile</h1>
<h2>Profile Name: <?php echo $profile['name'];?></h2>
<h2>Profile Email: <?php echo $profile['email'];?></h2>



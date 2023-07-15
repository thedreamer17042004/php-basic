<?php 
session_start(); // khởi tạo session
$profile = '';
// Kiểm tra dữ liệu của biến $_SESSION
if(isset($_SESSION['login'])){
    // lấy dữ liệu trong $_SESSION đã lưu
    $profile = $_SESSION['login'];
}
?>
<!-- Hiển thị thông tin $profile nếu có -->
<?php if($profile) :?>

<div class="jumbotron">
    <div class="container">
        <h1>Hello, <?php echo $profile['email'];?> !</h1>
        <p>Contents ...</p>
        <p>
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </p>
    </div>
</div>

<!-- hiển thị thông báo lỗi nếu chưa có session login  -->
<?php else: ?>

<div class="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    Bạn chưa đăng nhập, vul lòng đăng nhập để xem profile;
</div>

<?php endif;?>

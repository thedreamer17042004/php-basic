
<?php 
session_start(); // khởi động session
include 'header.php';?>
<!-- <div class="col-md-4 col-md-offset-4"> -->
<?php 
if( isset($_POST['email']) ){
    $email = $_POST['email'];
    $password = $_POST['password'];
    /**
     * các bạn có thể kiểm tra dữ liệu trước khi lưu vào sesssion
     * Kiểm tra định dạng email
     * Mã hóa mật khẩu ..vv.. 
     **/ 

    // lưu vào sesssion
    $_SESSION['login'] = ['email' => $email,'password' => $password];
    // chuyển hướng sang trang profile.php
    header('location: profile.php');
}
?>

<div class="col-md-4 col-md-offset-4">
    <form action="" method="POST" role="form">
        <legend>Form login</legend>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Input email">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Input password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<?php include 'footer.php';?>

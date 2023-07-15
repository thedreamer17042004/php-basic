<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Title Page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

    <?php 
$errors = []; // khai báo biến để lưu các lỗi nếu có
if(isset($_POST['email']))
    $email = $_POST['email'];
    $password = $_POST['password'];
    // validate không được rỗng của email
    if(empty($email)){
        $errors['Email_required'] = 'Địa chỉ email không được để trống';
    }
    // validate email đúng định dạng
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['Email_invalid'] = 'Địa chỉ email không đúng định dạng';
    }
    
        // validate không được rỗng của passwrd
    if(empty($password)){
        $errors['Password_required'] = 'Mật khẩu không được để trống';
    } 
?>

<?php if(count($errors)) : ?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php foreach($errors as $err) : ?>
            <p><?php echo $err ;?> </p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


        <div class="container">
            <div class="col-md-4">
                <form action="" method="POST" role="form">
                    <legend>Form đăng nhập</legend>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" name="email" placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </form>
            </div>
        </div>
    </body>
</html>

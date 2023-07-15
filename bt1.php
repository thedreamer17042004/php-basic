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
if(isset($_POST['name']))
    $email = $_POST['name'];
    $password = $_POST['status'];
    // validate không được rỗng của email
    if(empty($name)){
        $errors['Email_required'] = ' name không được để trống';
    }
    if (strlen($name) < 12)
        {
        echo 'Input is too short, minimum is 12 characters (20 max).';
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
                        <label for="">Name</label>
                        <input class="form-control" name="name" placeholder="Nhập name">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="password" class="form-control" name="status" placeholder="Nhập status">
                    </div>
                    <button type="submit" class="btn btn-primary">Click</button>
                </form>
            </div>
        </div>
    </body>
</html>

<?php include 'header.php' ?>




<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "php";
if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("failed to connect!");
}
else {
    echo "Connecting to database";
}


$error = '';
if(isset($_POST['name'])){
    $name = $_POST['name'];
    if(empty($name)){
        $error = 'Tên lớp học không được để trống';
    }
    // nếu không có lỗi thì tiến hành thêm mới vào bảng
    if(!$error){
        $sql = "INSERT INTO lop_hoc(name) VALUES('$name')";
        if(mysqli_query($conn,$sql)){
		//Nếu thêm mới thành công, chuyển hướng trang
            header('location: lop_hoc.php');
        }else{
		// echo mysqli_error($conn);
            $error = 'Có lỗi, vui lòng thử lại';
        }
    }
}
?>

<div class="panel panel-primary">
      <div class="panel-heading">
            <h3 class="panel-title">Thêm mới lớp học</h3>
      </div>
     <div class="panel-body">
        <form action="" method="POST" role="form">
            <div class="form-group">
                <label for="">Tên lớp</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập tên lớp">
                <?php if($error) :?>
                    <small class="help-block"><?php echo $error;?></small>
                <?php endif;?>
            </div>
            <button type="submit" class="btn btn-primary">Lưu lại</button>
        </form>
     </div>
</div>



<?php include 'footer.php' ?>
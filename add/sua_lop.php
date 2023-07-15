<?php 
include 'header.php'; 

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
// lấy id trên tham số url đã gửi tù nút sửa
$id = !empty($_GET['id']) ? (Int)$_GET['id'] : 0;
$query = mysqli_query($conn,"SELECT * FROM lop_hoc WHERE id = $id");
$lop = mysqli_fetch_assoc($query); // duyệt dữ liệu từ câu truy vấn


$error = '';
if(isset($_POST['name'])){
    $name = $_POST['name'];
    if(empty($name)){
        $error = 'Tên lớp học không được để trống';
    }
    // nếu không có lỗi thì tiến hành thêm mới vào bảng
    if(!$error){
        $sql = "UPDATE lop_hoc SET name = '$name' WHERE id = $id";
        if(mysqli_query($conn,$sql)){
            header('location: lop_hoc.php');
        }else{
            $error = 'Tên lóp này đã được sử dụng';
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
                <input type="text" class="form-control" name="name" value="<?php echo $lop['name'];?>">
                <?php if($error) :?>
                    <small class="help-block"><?php echo $error;?></small>
                <?php endif;?>
            </div>
            <button type="submit" class="btn btn-primary">Lưu lại</button>
        </form>
     </div>
</div>

<?php include 'footer.php';?>

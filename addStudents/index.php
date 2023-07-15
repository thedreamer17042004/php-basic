<?php include 'header.php';
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
$lops = mysqli_query($conn,"SELECT * FROM lop_hoc");

$errors = [];
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $lop_hoc_id = $_POST['lop_hoc_id'];
    if(empty($name)){
        $errors['Name_required'] = 'Tên sinh viên không được để trống';
    }
    if(empty($email)){
        $errors['Email_required'] = 'Email sinh viên không được để trống';
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['Email_invalid'] = 'Email không đúng định dạng';
    }
    if(empty($phone)){
        $errors['Phone_required'] = 'Điện thoại sinh viên không được để trống';
    }
    if(empty($lop_hoc_id)){
        $errors['Lop_required'] = 'Lớp học không được để trống';
    }
    // nếu không có lỗi thì tiến hành thêm mới vào bảng
    if(!$errors){
        $sql = "INSERT INTO sinh_vien(name,email,phone,lop_hoc_id) VALUES('$name','$email','$phone','$lop_hoc_id')";
        if(mysqli_query($conn,$sql)){
            header('location: sinh_vien.php');
        }else{
            $errors['failed'] = 'Có lỗi, vui lòng thử lại';
        }
    }

    
}




?>

<?php if($errors) { ?>
    
    <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php foreach($errors as $err) :?>
    <p><?php echo $err;?></p>
    <?php endforeach;?>
</div>

<?php } ?>






<div class="panel panel-primary">
      <div class="panel-heading">
            <h3 class="panel-title">Thêm mới sinh viên</h3>
      </div>
     <div class="panel-body">
        <form action="" method="POST" role="form">
            <div class="form-group">
                <label for="">Tên sinh viên</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập tên sinh vien">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ email</label>
                <input type="text" class="form-control" name="email" placeholder="Nhập dia chi email">
            </div>
            <div class="form-group">
                <label for="">Điện thoại</label>
                <input type="text" class="form-control" name="phone" placeholder="Nhập sdt">
            </div>

            <div class="form-group">
                <label for="">Lóp học</label>
                <select name="lop_hoc_id" class="form-control">
                    <option value="">Chọn lóp</option>
                <?php foreach($lops as $lop) :?>
                    <option value="<?php echo $lop['id'];?>"><?php echo $lop['name'];?></option>
                <?php endforeach;?>
                </select>
            </div>

                
            <button type="submit" class="btn btn-primary">Lưu lại</button>
        </form>
     </div>
</div>


<?php include 'footer.php' ?>
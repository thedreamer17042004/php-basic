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
// lấy id trên tham số url đã gửi tù nút xóa
$id = !empty($_GET['id']) ? (Int)$_GET['id'] : 0;


// cach normal
// $deleted = mysqli_query($conn,"DELETE FROM lop_hoc WHERE id = $id");
// if($deleted){
//   header('location: lop_hoc.php');
// }else{
//   echo 'Có lỗi, vui lòng kiểm tra lại';
// }

//truy vấn COUNT để đếm số lượng sinh viên theo lop_hoc_id
$sql_c = "SELECT COUNT(*) as 'total' FROM sinh_vien WHERE lop_hoc_id = $id";
$query_count = mysqli_query($conn,$sql_c); // truy vấn
$row_count = mysqli_fetch_assoc($query_count); // duyệt dữ liệu

// Trước khi xóa kiểm tra nếu COUNT == 0 không có sinh viên thì cho xóa
if($row_count['total'] == 0){
  $deleted = mysqli_query($conn,"DELETE FROM lop_hoc WHERE id = $id");
  if($deleted){
    header('location: lop_hoc.php');
  }else{
    $error = 'Có lỗi, vui lòng kiểm tra lại';
  }
}else{
  // ngược lại có sinh viên thì không cho xóa và gán giá trị cho biến $error
  $error = 'Lớp này đang có '.$row_count['total'] .' sinh viên';
}
echo $error; // Hiển thị lỗi nơi bạn muốn

?>
<?php include 'footer.php';?>

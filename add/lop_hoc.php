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

$lop_hoc = mysqli_query($conn,"SELECT * FROM lop_hoc");
?>
<div class="panel panel-primary">
      <div class="panel-heading">
          <h3 class="panel-title">Danh sách lớp học</h3>
      </div>
      <table class="table table-bordered table-hover">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Tên lóp</th>
                  <th>Trạng thái</th>
                  <th>Hành động</th>
              </tr>
          </thead>
          <tbody>
        <!-- duyệt dữ liệu sử dụng vòng lặp foreach -->
        <?php foreach($lop_hoc as $lop) : ?>
              <tr>
                  <td><?php echo $lop['id'];?></td>
                  <td><?php echo $lop['name'];?></td>
                  <td><?php echo $lop['id'] == 1 ? 'Đang học' : 'Đã kết thúc';?></td>
                  
                  <td>
                  <a href="sua_lop.php?id=<?php echo $lop['id'];?>" class="btn btn-xs btn-primary">Sửa</a>
                    <a href="xoa_lop.php?id=<?php echo $lop['id'];?>" class="btn btn-xs btn-danger">Xóa</a>
                  </td>
                  </tr>
        <?php endforeach; ?>
          </tbody>
      </table>
</div>
<?php include 'footer.php';?>

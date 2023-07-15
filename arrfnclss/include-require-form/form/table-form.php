<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Title Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="form-inline">
            <legend>Form tạo bảng</legend>
            <div class="form-group">
                <input type="text" class="form-control" name="row" placeholder="Số dòng">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="column" placeholder="Số cột">
            </div>
            <button type="submit" class="btn btn-primary">Tạo bảng</button>
        </form>
        <br>
        <?php 
                $row = 1;
                $column = 5;

                // khai báo các biến mạc định
                if(isset($_POST['row'])){
                    $row = $_POST['row'];
                    $column = $_POST['column'];
                }
                
            ?>
        <table class="table table-bordered">
            <tbody>
                <?php for($i = 1; $i <= $row; $i ++) :?>
                <tr>
                    <?php for($j = 1; $j <= $column; $j ++) :?>
                    <td>Column <?php echo $j;?></td>
                    <?php endfor; ?>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
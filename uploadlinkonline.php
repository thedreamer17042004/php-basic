<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Title Page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

    
        <div class="container">

        <?php     
        if(!empty($_POST['img_url'])) {
            $url=$_POST['img_url'];
            // lấy dữ liệu file dưới dạng bit từ url
            $data = file_get_contents($url);
            // lấy thông tin file từ url: basename, extension
            $file = pathinfo($url); 
            $extension = $file['extension']; // lấy định dạng cảu file
            // Tạo một tên file mới tùy ý
            $file_name = time().'-from_url'.$extension;
            // Tạo một file ảnh mới với tên trong thư mục uploads
            file_put_contents('uploads/'.$file_name, $data);
            // Hiển thị hình ảnh sau khi upload
            echo '<img src="uploads/'.$file_name.'" >';
        }
        ?>

            <div class="col-md-4">
                <form action="" method="POST" enctype="multipart/form-data">
                    <legend>Form upload</legend>
                    <div class="form-group">
                        <input class="form-control" name="img_url" placeholder="Url image..." />
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </body>
</html>

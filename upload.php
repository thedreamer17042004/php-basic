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
                $types = ['image/jpeg','image/png','image/gif'];
                $errors = [];
        
        if(!empty($_FILES['image']['name'])) {
            $file = $_FILES['image'];
            $file_name = $file['name'];
            $tmp_name = $file['tmp_name'];
            // thực hiện uploads
            $type = $file['type'];
            // thực hiện uploads
            if(in_array($type,$types)){
                move_uploaded_file($tmp_name,'uploads/'.$file_name);
            }else{
                $errors['File_invalid'] = 'Định dạng ảnh không phù hợp';
            }

        }

        ?>

            <div class="col-md-4">
                <form action="" method="POST" enctype="multipart/form-data">
                    <legend>Form upload</legend>
                    <?php 
                    if(isset($errors['File_invalid'])) {
                        echo $errors['File_invalid'];
                    }
                    ?>

                    <div class="form-group">
                        <input type="file" class="form-control" name="image" />
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </body>
</html>

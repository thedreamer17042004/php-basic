<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php 
    $students = [
        ['Name' => 'Nguyễn Huy Hoàng', 'Email' => 'hoang@gmail.com', 'Phone' => '03949445', 'Gender' => 'Nu', 'img' => 'https://i.pravatar.cc/150'],
        ['Name' => 'Nguyễn Huy 1', 'Email' => 'dfa@gmail.com', 'Phone' => '03949445', 'Gender' => 'Nam', 'img' => 'https://i.pravatar.cc/151'],
        ['Name' => 'Nguyễn Huy 2', 'Email' => 'hofdang@gmail.com', 'Phone' => '03949445', 'Gender' => 'Nu','img' => 'https://i.pravatar.cc/152'],
        ['Name' => 'Nguyễn Huy 3', 'Email' => 'hoadfdng@gmail.com', 'Phone' => '03949445', 'Gender' => 'Nam', 'img' => 'https://i.pravatar.cc/153'],
        ['Name' => 'Nguyễn Huy 4', 'Email' => 'dfa@gmail.com', 'Phone' => '344545', 'Gender' => 'Nu', 'img' => 'https://i.pravatar.cc/154'],
        ['Name' => 'Nguyễn Huy 5', 'Email' => 'hoangdff@gmail.com', 'Phone' => '03949445', 'Gender' => 'Nam', 'img' => 'https://i.pravatar.cc/155'],
        ['Name' => 'Nguyễn Huy 6', 'Email' => 'dà@gmail.com', 'Phone' => '03949445', 'Gender' => 'Nu', 'img' => 'https://i.pravatar.cc/156'],
        ['Name' => 'Nguyễn Huy 7', 'Email' => 'hoangẻ@gmail.com', 'Phone' => '03949445', 'Gender' => 'Nam', 'img' => 'https://i.pravatar.cc/157'],
    ];
    ?>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Avatar</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $std ):   ?>
            <tr>
                <td><?php echo $std['Name'];?></td>
                <td><?php echo $std['Email'];?></td>
                <td><?php echo $std['Phone'];?></td>
                <td><?php echo $std['Gender'];?></td>
                <td><img src="<?php echo $std['img'];?>" alt=""></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
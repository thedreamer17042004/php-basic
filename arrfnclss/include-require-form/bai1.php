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
    $data = [
        ['img' => 'https://i.pravatar.cc/150'],
        ['img' => 'https://i.pravatar.cc/151'],
        ['img' => 'https://i.pravatar.cc/152'],
        ['img' => 'https://i.pravatar.cc/153'],
        ['img' => 'https://i.pravatar.cc/154'],
        ['img' => 'https://i.pravatar.cc/155'],
    ]
     ?>
    <div class="container col-md-8">

        <div class="form-group">
            <label for="">Form demo</label>
            <div>
                <select class="form-control" name="" id="">
                    <?php foreach($data as $pro) :?>
                    <option>Chon anh</option>
                    <?php for ($i=1; $i < 7; $i++) { ?>
                    <option value="<?php echo $pro['img'];?>">Anh <?php echo $i ?></option>
                    <?php } ?>
                    <?php endforeach;?>
                </select>
                <button class="btn btn-danger" type="submit">Chon anh</button>
                <img src="<?php echo $pro['img'];?>" alt="">


            </div>
        </div>



    </div>
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
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
 $vegatables = [
    ['name' => 'Rau cu sach', 'image' => 'https://i.pravatar.cc/150', 'price' => '10000', 'sale_price' => '5000'],
    ['name' => 'Rau cu sach', 'image' => 'https://i.pravatar.cc/150', 'price' => '10000', 'sale_price' => '5000'],
    ['name' => 'Rau cu sach', 'image' => 'https://i.pravatar.cc/150', 'price' => '10000', 'sale_price' => '5000'],
    ['name' => 'Rau cu sach', 'image' => 'https://i.pravatar.cc/150', 'price' => '10000', 'sale_price' => '5000'],
 ]
?>

<div class="container">
    <div class="row">
    <?php foreach ($vegatables as $veg ) : ?>
        <div class="col-md-3">
            <div class="card text-left">
            <img class="card-img-top" src="<?php echo $veg['image']?>" alt="">
            <div class="card-body">
                <h4 class="card-title"><?php echo $veg['name'] ?></h4>
                <p class="card-text">Body</p>
                <div style="display: flex; margin-left: 10px">
                    <button class="btn btn-primary">View</button>
                    <button class="btn btn-danger">Add card</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
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
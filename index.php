<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include __DIR__ . '/database.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!--card cibo-->
                <?php foreach ($foodArray as $item){ ?>

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo $item->image ?>" alt="Card image cap">
                        <h1><?php echo $item->title ?></h1>
                        <div class="card-body">
                            <p class="card-text"><?php echo $item->price ?></p>
                            <p class="card-text"><?php echo $item->category ?></p>
                            <p class="card-text"><?php echo $item->weight ?></p>
                            <p class="card-text"><?php echo $item->ingredients ?></p>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>

</body>
</html>
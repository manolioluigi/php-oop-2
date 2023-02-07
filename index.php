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
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <div>
                    <h2 class="mx-3">Boolshop</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div>
                    <h4 class="mx-3">I nostri prodotti:</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <div class="card-container d-flex flex-wrap">

                    <!--card cibo-->
                    <?php foreach ($foodArray as $item){ ?>

                        <div class="card m-3 card-size">
                            <div class="card-img-container">
                                <img class="card-img-top" src="<?php echo $item->image ?>" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h1><?php echo $item->title ?></h1>
                                <div class="my-1">
                                    <?php echo getIcons($item->category) ?>
                                    <span class="card-text"><?php echo $item->category ?></span>
                                </div>
                                <p class="card-text"><?php echo $item->price ?></p>
                                <p class="card-text"><?php echo $item->weight ?></p>
                                <span class="card-text"><?php echo $item->ingredients ?></span>
                            </div>
                        </div>

                    <?php } ?>

                    <!--card kennel-->
                    <?php foreach ($kennelArray as $item){ ?>

                        <div class="card m-3 card-size">
                            <div class="card-img-container">
                                <img class="card-img-top" src="<?php echo $item->image ?>" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h1><?php echo $item->title ?></h1>
                                <div class="my-1">
                                    <?php echo getIcons($item->category) ?>
                                    <span class="card-text"><?php echo $item->category ?></span>
                                </div>
                                <p class="card-text"><?php echo $item->price ?></p>
                                <p class="card-text"><?php echo $item->material ?></p>
                                <p class="card-text"><?php echo $item->size ?></p>
                            </div>
                        </div>

                    <?php } ?>

                    <!--card toy-->
                    <?php foreach ($toyArray as $item){ ?>

                        <div class="card m-3 card-size">
                            <div class="card-img-container">
                                <img class="card-img-top" src="<?php echo $item->image ?>" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h1><?php echo $item->title ?></h1>
                                <p class="card-text"><?php echo $item->price ?></p>
                                <div class="my-1">
                                    <?php echo getIcons($item->category) ?>
                                    <span class="card-text"><?php echo $item->category ?></span>
                                </div>
                                <p class="card-text"><?php echo $item->desc ?></p>
                                <p class="card-text"><?php echo $item->size ?></p>
                            </div>
                        </div>

                    <?php } ?>

                </div>

            </div>
        </div>
    </div>

</body>
</html>
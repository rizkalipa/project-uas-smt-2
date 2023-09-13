<?php 

include_once"data-produk.php";

if ($_GET['key'])
{
    $key = $_GET['key'];

    if (array_key_exists($key, $product_men))
    {
        $product_selected = $product_men;
    }
    else 
    {
        $product_selected = $product_women;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url" content="http://klothee.rf.gd">
    <meta property="og:image" content="http://klothee.rf.gd/img/klothee-1.png">
    <meta property="title" content="Klothee Product">
    <meta property="description" content="Ini contoh produk.">
    <title>Product Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.8.2-web/css/all.min.css">
    <link rel="icon" href="img/1559034957.ico">
    <style>
        @font-face {
            font-family: Poppins;
            src: url('font/Poppins-Regular.ttf');
        }

        .footer {
            width: 100%;
            position: static;
            bottom: 0; 
        }
    </style>
    <script src="jquery/jquery-3.4.1.min.js"></script>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <a href="index.php" class="brand"><img src="img/klothee-2.png"></a>
        <div class="menu">
            <ul class="submenu">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="product.php">Product</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
            <button class="nav-bar"><i class="fas fa-bars"></i></button>
        </div>
    </div>  

    <!-- Header Slide Mobile -->
    <div class="mobile-header">
        <div class="wrapper">
            <a class="text-center" href="index.php"><img class="img-fluid w-50" src="img/klothee-1-white.png"></a>
            <ul class="responsive-menu mt-5">
                <a href="index.php"><li><i class="fas fa-home pr-3"></i>Home</li></a>
                <a href="product.php"><li><i class="fa fa-tshirt pr-3"></i>Product</li></a>
                <a href="about.php"><li><i class="fas fa-user-friends pr-3"></i>About</li></a>
            </ul>
        </div>
    </div>

    <!-- Product Details -->
    <div class="product-details">
        <div class="container">
            <div class="row align-items-center">
            <?php 
                foreach ($product_selected as $items => $item) : 
                    if ($key == $items) {
                        $name = $items;
                        $badge = $item['badge'];
                        $description = $item['deskripsi'];
                        $price = $item['harga'];
                        $material = $item['bahan'];
            ?> 

                <div class="col-lg-6 text-center">
                    <img id="share-img" src="img/products/<?= $name ?>.jpg" class="img-fluid rounded shadow w-75">
                </div>
                <div class="col-lg-6 img-description">
                    <div class="row flex-column m-0">
                        <div class="col-md">
                            <h3 class="display-4 mb-2"><?= $name ?></h3>
                            <h5 class="text-muted mb-4"><?= $material ?> <span class="badge badge-pill badge-<?= $badge ?>"><?= $price ?></span></h5>
                            <p id="share-desc"><?= $description ?></p>
                        </div>
                        <div class="col-md ml-0">
                            <!-- <div id="shareFb" class="sharethis-inline-share-buttons"></div> -->
                            <button id="shareFb" class="btn btn-sm"><i class="fab fa-facebook-f mr-3"></i> Facebook</button>
                            <button id="shareTwitter" class="btn btn-sm"><i class="fab fa-twitter mr-3"></i> Twitter</button>
                        </div>
                    </div>
                </div>

            <?php 
                    }
                endforeach; 
            ?>
            </div>
        </div>
    </div>  

    <!-- Footer -->
    <div class="footer">
        <img src="img/klothee-1-white.png">
        <p>Copyright &copy; 2019 <a href="index.php" class="highlight">Klothee Inc.</a></p>
    </div>

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d0515604351e90012650bdd&product='inline-share-buttons' async='async'></script>
    <script src="main.js"></script>
</body>
</html>
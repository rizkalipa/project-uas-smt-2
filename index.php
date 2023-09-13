<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home of Clothes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.8.2-web/css/all.min.css">
    <link rel="icon" href="img/1559034957.ico">
    <style>
        @font-face {
            font-family: Poppins;
            src: url('font/Poppins-Regular.ttf');
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
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
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
    
    <!-- Slogan Banner -->
    <div class="container container-fluid slogan-home">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 text-right">
                <h3 class="display-3"><b>We make it better <span class="highlight"> for you</span></b></h3>
            </div>
            <div class="col-lg-6 border-left">
                <p class="display-5 lead text-muted slogan-home-desc">Klothee memproduksi kaos dan kemeja
                        yang dibuat  dengan menyesuaikan bahan sesuai keinginan anda. 
                        Terdapat berbagai pilihan model dengan pembuatan yang modern dan berkualitas.</p>
            </div>
        </div>
    </div>

    <!-- Image Banner -->
    <div class="jumbotron">
        <h3>It's Not About Brand, <br> Brand is Just a Label. <br> It's All About <span style="font-family: brush script mt; font-size: 35px;"> Style</span></h3>
    </div>

    <!-- Floating Box -->
    <div class="service shadow">
        <div class="row">
            <div class="col-lg-2"><i class="fa fa-tshirt"></i></div>
            <div class="col-lg-10">
                <p><b>Kami Membuat yang Terbaik</b></p>
                <p>Produk dengan pembuatan yang sudah modern.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2"><i class="fa fa-socks"></i></div>
            <div class="col-lg-10">
                <p><b>Cocok Untuk Segala Usia</b></p>
                <p>Dengan desain fleksibel yang keren untuk siapa saja.</p>
            </div>
        </div>
    </div>

    <div class="close-bg"></div>

    <!-- Product Thumbnail -->
    <div class="product">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-6">
                    <img src="img/home-thumbnail.jpg" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <div class="card shadow p-5">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center m-0">
                            <h4 class="card-title">Ayo Shopping !</h4>
                            <p class="card-text">Lihat produk terbaru kami</p>
                            <a href="product.php"><button class="btn btn-info">Shopping</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <img src="img/klothee-1-white.png">
        <p>Copyright &copy; 2019 <a href="index.php" class="highlight">Klothee Inc.</a></p>
    </div>

    <script src="main.js"></script>
</body>
</html>
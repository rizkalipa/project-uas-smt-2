<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Products</title>
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
    <script>
        $(document).ready(function()
        {
            $.post('product-list.php', {gender: 'male'}, function(data)
            {
                $('.products-card').fadeOut('200', 'swing', function()
                {
                    $(this).delay(100).html(data).fadeIn(500);
                });
            });
        })
    </script>
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

    <!-- Slogan Product -->
    <div class="slogan bg-responsive-product">
        <div class="row">
            <div class="col-lg-6 text-right">
                <h3 class="display-4"><b>Our best product<br> any<span class="highlight"> interested ?</span></b></h3>
            </div>
            <div class="col-lg-6 border-left img-slogan">
                <img src="img/icon-klothee-1.jpg" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>

    <!-- Product List -->
    <div id="product-list">
        <div class="container">
            <div class="d-flex flex-column align-items-center text-center p-5">
                <h3 class="display-5 mb-4">Product <span class="highlight">List</span></h3>
                <ul class="gender-button">
                    <li><button class="btn" type="submit" id="changeImage-1" name="gender" value="men">Men's</button></li>
                    <li><button class="btn" type="submit" id="changeImage-2" name="gender" value="women">Women's</button></li>
                    <li><button class="btn" type="submit" id="changeImage-3" name="gender" value="all">All</button></li>
                </ul>
            </div>

            <div class="container mb-5 d-flex flex-column align-items-center">
                <div class="card shadow banner-product w-75">
                    <div class="row no-gutters">
                        <div id="men-women-image" class="col-md-8">
                            <img id="click-change" src="img/men-bg.jpg" class="card-img bottom">
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                                <h3 class="card-title">
                                    <strong id="text-change">Men Fashion</strong>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="divider-10">
            </div> 

            <!-- Product List & Description -->
            <div class="products-grid">
                <div class="products-card">
                    
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
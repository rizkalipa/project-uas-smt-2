<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a class="active" href="about.php">About</a></li>
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
    <div class="slogan bg-responsive-about">
        <div class="row">
            <div class="col-lg-6 text-right pr-4">
                <h3 class="display-4"><b>This is our <br><span class="highlight"> Beloved Team</span></b></h3>
            </div>
            <div class="col-lg-6 border-left pl-4 img-slogan">
                <img src="img/icon-klothee-2.jpg" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- Team List -->
    <div class="about-bg">
        <div class="container container-fluid user-template">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <img src="img/user-2.jpg" class="img-thumbnail shadow-sm">
                        <div class="card-body mt-3">
                            <h2 class="card-title">Riandi Paska <span class="highlight">Ramadan</span></h2>
                            <p class="card-subtitle text-muted mb-4">President Director R.S Persahabatan</p>
                            <p><strong>NIM : 12182628</strong></p>
                        </div>
                        <div class="card-footer">
                            <a href="http://instagram.com/riandipaska" target="blank">
                                <button class="btn btn-info"><span style="font-size: 17px; margin-right: 5px;">
                                <i class="fab fa-instagram"></i></span> Kunjungi</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <img src="img/user-1.1.jpg" class="img-thumbnail shadow-sm">
                        <div class="card-body mt-3">
                            <h2 class="card-title">Rizky Adjie <span class="highlight">Rahmansyah</span></h2>
                            <p class="card-subtitle text-muted mb-4">Qori' Internasional</p>
                            <p><strong>NIM : 12180104</strong></p>
                        </div>
                        <div class="card-footer">
                            <a href="http://instagram.com/rizkalipa" target="blank">
                                <button class="btn btn-info"><span style="font-size: 17px; margin-right: 5px;">
                                <i class="fab fa-instagram"></i></span> Kunjungi</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <img src="img/user-3.2.jpg" class="img-thumbnail shadow-sm">
                        <div class="card-body mt-3">
                            <h2 class="card-title">Sinta <span class="highlight">Yorika</span></h2>
                            <p class="card-subtitle text-muted mb-4">Brand Designer | Ambassador</p>
                            <p><strong>NIM : 12181891</strong></p>
                        </div>
                        <div class="card-footer">
                            <a href="http://instagram.com/sintayrkaa18" target="blank">
                                <button class="btn btn-info"><span style="font-size: 17px; margin-right: 5px;">
                                <i class="fab fa-instagram"></i></span> Kunjungi</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <img src="img/user-4.jpg" class="img-thumbnail shadow-sm">
                        <div class="card-body mt-3">
                            <h2 class="card-title">Nefri <span class="highlight">Yanti</span></h2>
                            <p class="card-subtitle text-muted mb-4">Master Chef Pakistan</p>
                            <p><strong>NIM : 12180396</strong></p>
                        </div>
                        <div class="card-footer">
                            <a href="http://instagram.com/nefri_8" target="blank">
                                <button class="btn btn-info"><span style="font-size: 17px; margin-right: 5px;">
                                <i class="fab fa-instagram"></i></span> Kunjungi</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <img src="img/klothee-1-white.png" class="text-center">
        <p>Copyright &copy; 2019 <a href="index.php" class="highlight">Klothee Inc.</a></p>
    </div>

    <script src="main.js"></script>
</body>
</html>
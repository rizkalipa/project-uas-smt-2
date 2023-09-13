<?php 

include_once"data-produk.php";

if ($_POST['gender'] == 'male')
{
    $data = $product_men;
    $gender = 'male';
}
elseif ($_POST['gender'] == 'female')
{
    $data = $product_women;
    $gender = 'female';
}
elseif ($_POST['gender'] == 'all')
{
    $data = array_merge($product_men, $product_women);
    $gender = 'all';
}

$genderDisplay = ucfirst($gender);

foreach ($data as $items => $item) {
    $name = $items;
    $badge = ($gender == 'all') ? 'secondary' : $item['badge'];
    $description = $item['deskripsi'];
    $price = $item['harga'];

    echo <<<POST

    <div class="card shadow-sm border-0">
        <img class="card-img-top" src="img/products/$name.jpg" alt="">
        <div class="card-body">
            <h5 class="card-title">
                <strong class="primary">$name</strong>
            </h5>
            <p class="card-subtitle text-muted mb-4">$price |   
                    <span class="badge badge-$badge">$genderDisplay <i class="fa fa-$gender"></i></span></p>
            <p>$description</p>
        </div>
        <div class="card-footer text-center">
            <a href="product-details.php?key=$name"><button class="btn btn-info">See Detail</button></a>
        </div>
    </div>

POST;
}

?>
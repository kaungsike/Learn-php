<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My page</h1>

    <?php 
    $products = [
        [
            "id" => 1,
            "name" => "Apple",
            "price" => 700
        ],
        [
            "id" => 2,
            "name" => "Orange",
            "price" => 900
        ],
        [
            "id" => 3,
            "name" => "Mango",
            "price" => 400
        ],
    ];
    ?>

    <!-- <?php 
    
    ?> -->

    <?php foreach($products as $product) : ?>
        <div>
            <h1><?= $product["name"]; ?></h1>
            <p><?= $product["price"];  ?></p>
            <hr>
        </div>
    <?php endforeach; ?>
</body>
</html>

<?php
require_once "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial - 2</title>
</head>
<body>

    <h3>Task 1 - Display Categories</h3>

    <?php
    $categories = ["Laptops", "Phones", "Accessories", "Audio"];

    foreach ($categories as $category) {
        echo "$category <br>";
    }
    ?>

    <hr>

    <h3>Task 2 - Display Product Details</h3>

    <?php
    $product = [
        "name" => "Wireless Mouse",
        "price" => 850,
        "stock" => 12
    ];

    foreach ($product as $key => $value) {
        echo "$key: $value <br>";
    }
    ?>

    <hr>

    <h3>Task 3 - Create Product Catalogue</h3>

    <?php
    $products = [
        ["id" => 101, "name" => "Wireless Mouse", "category" => "Accessories", "price" => 850, "stock" => 12],
        ["id" => 102, "name" => "USB-C Cable", "category" => "Accessories", "price" => 350, "stock" => 25],
        ["id" => 103, "name" => "Keyboard", "category" => "Accessories", "price" => 1200, "stock" => 10],
        ["id" => 104, "name" => "Laptop", "category" => "Electronics", "price" => 75000, "stock" => 5],
        ["id" => 105, "name" => "Headphones", "category" => "Audio", "price" => 2500, "stock" => 15]
    ];
    ?>

    <hr>

    <h3>Task 4 - Display Product List</h3>

    <?php
    foreach ($products as $product) {
        echo "Product Name: {$product['name']} <br>";
        echo "Category: {$product['category']} <br>";
        echo "Price: Rs. {$product['price']} <br>";
        echo "Stock: {$product['stock']} <br><br>";
    }
    ?>

    <hr>

    <h3>Task 5 - Filter Products with Price Greater Than 500</h3>

    <?php
    $priceFilter = array_filter($products, function($product) {
        return $product["price"] > 500;
    });

    foreach ($priceFilter as $product) {
        echo "Product Name: {$product['name']} <br>";
        echo "Category: {$product['category']} <br>";
        echo "Price: Rs. {$product['price']} <br>";
        echo "Stock: {$product['stock']} <br><br>";
    }
    ?>

    <hr>

    <h3>Task 6 - Filter Products with Stock Less Than 10</h3>

    <?php
    $stockFilter = array_filter($products, function($product) {
        return $product["stock"] < 10;
    });

    foreach ($stockFilter as $product) {
        echo "Product Name: {$product['name']} <br>";
        echo "Category: {$product['category']} <br>";
        echo "Price: Rs. {$product['price']} <br>";
        echo "Stock: {$product['stock']} <br><br>";
    }
    ?>

    <hr>

    <h3>Task 7 - Display Product Names Using array_map()</h3>

    <?php
    $productNames = array_map(function($product) {
        return $product["name"];
    }, $products);

    foreach ($productNames as $name) {
        echo "$name <br>";
    }
    ?>

    <hr>

    <h3>Task 8 - Display Product Name and Price Using array_map()</h3>

    <?php
    $productNamePrice = array_map(function($product) {
        return "{$product['name']} - Rs. {$product['price']}";
    }, $products);

    foreach ($productNamePrice as $product) {
        echo "$product <br>";
    }
    ?>

    <hr>

    <h3>Task 9 - Calculate Total Stock Value Using array_reduce()</h3>

    <?php
    $totalStockValue = array_reduce($products, function($total, $product) {
        return $total + ($product["price"] * $product["stock"]);
    }, 0);

    echo "Total Stock Value: Rs. {$totalStockValue}";
    ?>

    <hr>

    <h3>Task 10 - Count Products with Stock Greater Than Zero Using array_reduce()</h3>

    <?php
    $availableProducts = array_reduce($products, function($count, $product) {
        if ($product["stock"] > 0) {
            return $count + 1;
        }

        return $count;
    }, 0);

    echo "Total Available Products: {$availableProducts}";
    ?>

    <hr>

    <h3>Task 11 - Reverse Product Catalogue Using array_reverse()</h3>

    <?php
    $reversedProducts = array_reverse($products);

    foreach ($reversedProducts as $product) {
        echo "Product Name: {$product['name']} <br>";
        echo "Category: {$product['category']} <br>";
        echo "Price: Rs. {$product['price']} <br>";
        echo "Stock: {$product['stock']} <br><br>";
    }
    ?>

    <hr>

    <h3>Task 12 - Format Product Prices Using a Function</h3>

    <?php
    foreach ($products as $product) {
        echo "Product Name: {$product['name']} <br>";
        echo "Price: " . formatPrice($product["price"]) . "<br><br>";
    }
    ?>

    <hr>

    <h3>Task 13 - Display Products Under Rs. 1000</h3>

    <?php
    $filteredProducts = getProductsUnderPrice($products, 1000);

    foreach ($filteredProducts as $product) {
        echo "Product Name: {$product['name']} <br>";
        echo "Price: " . formatPrice($product["price"]) . "<br><br>";
    }
    ?>

</body>
</html>

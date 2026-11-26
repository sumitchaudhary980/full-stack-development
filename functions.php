
<?php
function formatPrice($price) {
    return "Rs. {$price}";
}

function getProductsUnderPrice($products, $maxPrice) {
    $filteredProducts = [];

    foreach ($products as $product) {
        if ($product["price"] <= $maxPrice) {
            $filteredProducts[] = $product;
        }
    }

    return $filteredProducts;
}
?>

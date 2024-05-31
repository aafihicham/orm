<?php

require_once 'ORM.php';
require_once 'Product.php';

$orm = new ORM('products', 'Product');

$id = 1; 
$productData = $orm->read($id);

if ($productData) {
    $product = new Product($productData['name'], $productData['price'], $productData['id']);
    echo "Product found:\n";
    print_r($product);
} else {
    echo "No product found with ID $id\n";
}

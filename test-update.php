<?php

require_once 'ORM.php';
require_once 'Product.php';

$orm = new ORM('products', 'Product');

$product = new Product('Updated Product', 29.99, 1);
$orm->update($product);

echo "Product updated\n";

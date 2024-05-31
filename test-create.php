<?php
// test-create-table-and-record.php

require_once 'ORM.php';
require_once 'Product.php'; 


$orm = new ORM('products', 'Product');

// Create the table
$orm->createTable();

// Create a new product object
$product = new Product('Sample Product', 19.99, 'Description of Sample Product');

// Insert the product into the table
$productId = $orm->create($product);

echo "Table created and first record inserted successfully. Product ID: $productId\n";
?>

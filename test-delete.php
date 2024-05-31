<?php

require_once 'ORM.php';

$orm = new ORM('products', 'Product');

$id = 1;
$orm->delete($id);

echo "Product deleted\n";

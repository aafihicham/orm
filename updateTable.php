<?php
<<<<<<< HEAD
=======
// test-update-table.php
>>>>>>> d1cec74791cda1409ad27b9f1e8b12bdc6944434

require_once 'ORM.php';
require_once 'Product.php';

$orm = new ORM('products', 'Product');
$orm->updateTable();

echo "Table updated successfully.\n";
?>
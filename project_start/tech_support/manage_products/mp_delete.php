<?php
require_once('../model/database.php');

$product_code = filter_input(INPUT_POST, 'product_code');



    $query = 'DELETE FROM products
    WHERE productCode= :product_code';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_code', $product_code);
    $success = $statement-> execute();
    $statement-> closeCursor();
[]
include('index.php');
?>

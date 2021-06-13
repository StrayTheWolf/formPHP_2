<?php
include_once 'initBase.php';

$data = array('product' => $_POST['product_name'], 'quantity' => $_POST['quantity'], 'description' => $_POST['description']);


$query = initBase()->prepare('INSERT INTO products (product_name, quantity, description) VALUES (:product, :quantity, :description)');
$query->execute($data);


header('Location: /');
exit;
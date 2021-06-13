<?php
include_once 'initBase.php';

$data = array('product' => $_POST['product_name'], 'quantity' => $_POST['quantity'], 'description' => $_POST['description']);


$query = initBase()->prepare('INSERT INTO products (product_name, quantity, description) VALUES (:product, :quantity, :description)');
$query->execute($data);

session_start();

$result = $_SESSION['message'] = 'Data successfully send';

header('Location: /');
exit;
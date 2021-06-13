<?php
include_once 'initBase.php';

$data = array('name' => $_POST['user_name'], 'email' => $_POST['user_email'], 'password' => $_POST['password']);


$query = initBase()->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
$query->execute($data);

$data['password'] = '';
header('Location: /');
exit;

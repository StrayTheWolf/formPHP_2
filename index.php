<?php

//Трим для удаления / из пути, который потом в кейсах
switch (trim($_SERVER['REQUEST_URI'], '/'))
{
    case '':
        include __DIR__ . '/pages/index.php';
        break;

    case 'addProduct':
        include __DIR__ . '/pages/addProduct.php';
        break;

    case 'addUser':
        include __DIR__ . '/pages/addUser.php';
        break;
}
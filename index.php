<?php

//Трим для удаления / из пути, который потом в кейсах
switch (trim($_SERVER['REQUEST_URI'], '/')) {
    case '':
        //вывод главной страницы она же шаблон
        include __DIR__ . '/pages/layout.php';
        break;

    case 'addProduct':
        //начинаем собираем в буфер
        ob_start();
        //инклудим страницу для сбора и вывода
        include __DIR__ . '/pages/addProduct.php';
        //в переменной контент будет все содержимое до комманды clean а именно страница addProduct
        $content = ob_get_contents();
        ob_clean();
        //задаем переменной title которая в шаблоне, значение
        $title = 'Product Add Page';
        //инклудим основной шаблон
        include __DIR__ . '/pages/layout.php';
        break;

    case 'addUser':
        include __DIR__ . '/pages/addUser.php';
        $content = ob_get_contents();
        ob_clean();
        //задаем переменной title которая в шаблоне, значение
        $title = 'User Add Page';
        //инклудим основной шаблон
        include __DIR__ . '/pages/layout.php';
        break;
}
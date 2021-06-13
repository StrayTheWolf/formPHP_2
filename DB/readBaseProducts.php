<?php

include_once 'initBase.php';

function readBaseProducts()
{
//запрос из базы
    $query = initBase()->query('SELECT * FROM products ORDER BY id DESC LIMIT 5');

//получение результатов запроса и возврат их в вызов функции
    return $query->fetchAll(PDO::FETCH_ASSOC);
}


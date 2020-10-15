<?php
//Конфигурация для подключения
$config = include 'config.php';

//Автозагрузчик
require '../vendor/autoload.php';

//Подключение к
use App\Connection;
use App\QueryBuilder;

$pdo = new Connection($config);
new QueryBuilder($pdo);



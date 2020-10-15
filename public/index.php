<?php
require '../config/debug.php';


//Автозагрузчик
require '../vendor/autoload.php';

use App\Router;

Router::run([
    '/'=> '../app/controllers/home.php',
    '/about' => '../app/controllers/about.php'
]);




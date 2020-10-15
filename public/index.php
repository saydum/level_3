<?php
require '../config/debug.php';


//Автозагрузчик
require '../vendor/autoload.php';

use App\Router;

Router::run([
    '/'=> '../controllers/homePage.php',
    '/about' => 'about.php'
]);




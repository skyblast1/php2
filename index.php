<?php

use Models\Product;
use Models\User;
use Models\News;

spl_autoload_register(function ($class) {
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
});




$data = News::findLast3();
var_dump($data);

include __DIR__ . '/templates/template.php';
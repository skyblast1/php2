<?php

use Models\Product;
use Models\User;
use Models\News;

spl_autoload_register(function ($class) {
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
});



$data = Product::findById();
var_dump($data);

$data = User::findAll();
var_dump($data);

$data = News::findLast3();
var_dump($data);
<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'helpers.php';

$is_auth = rand(0, 1);

$user_name = 'Alexander';
$categories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
$products = [
    [
        "name" => "2014 Rossignol District Snowboard",
        "category" => "Доски и лыжи",
        "price" => 10999,
        "img_url" => "img/lot-1.jpg"
    ],
    [
        "name" => "DC Ply Mens 2016/2017 Snowboard",
        "category" => "Доски и лыжи",
        "price" => 159999,
        "img_url" => "img/lot-2.jpg"
    ],
    [
        "name" => "Крепления Union Contact Pro 2015 года размер L/XL",
        "category" => "Крепления",
        "price" => 8000,
        "img_url" => "img/lot-3.jpg"
    ],
    [
        "name" => "Ботинки для сноуборда DC Mutiny Charocal",
        "category" => "Ботинки",
        "price" => 10999,
        "img_url" => "img/lot-4.jpg"
    ],
    [
        "name" => "Куртка для сноуборда DC Mutiny Charocal",
        "category" => "Одежда",
        "price" => 7500,
        "img_url" => "img/lot-5.jpg"
    ],
    [
        "name" => "Маска Oakley Canopy",
        "category" => "Разное",
        "price" => 5400,
        "img_url" => "img/lot-6.jpg"
    ]
];

$page_content = include_template('main.php', ['categories' => $categories, 'products' => $products]);
$layout_content = include_template('layout.php', ['page_content' => $page_content, 'categories' => $categories, 'user_name' => $user_name, 'page_title' => 'Главная', 'is_auth' => $is_auth]);
print($layout_content);

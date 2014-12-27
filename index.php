<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim([
    'view' => new \Slim\Views\Twig()
]);

$app->get('/', function () use ($app) {
    $app->render('index.php', [ 'active_page' => 'home' ]);
});

$app->get('/hello(/)', function () use ($app) {
    $app->render('hello.php', [ 'active_page' => 'hello' ]);
});

$app->run();

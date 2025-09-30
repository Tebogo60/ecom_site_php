<?php

use FastRoute\RouteCollector;
use App\Controller\HomeController;

$controller;

return function (RouteCollector $r) {
    $r->addRoute('GET', '/', function () {
        require __DIR__ . "/../app/View/pages/home.php";
    });

    $r->addRoute('GET', '/login', function () {
        require __DIR__ . "/../app/View/auth/login.php";
    });
};

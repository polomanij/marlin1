<?php
    include __DIR__ . '/../functions.php';
    $db = include __DIR__ . '/../database/start.php';

    $routes = [
        "/course-module1/" => "functions/homepage.php",
        "/course-module1/image.view" => "functions/image.view.php",
        "/course-module1/image.php" => "image.php",
    ];
    
    $route = $_SERVER["REQUEST_URI"];
    
    if (array_key_exists($route, $routes)) {
        include __DIR__ . '/../' . $routes[$route];
    } else {
        dd(404);
    }
?>
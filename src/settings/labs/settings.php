<?php

return [
    'displayErrorDetails' => true, // set to false in production
    'addContentLengthHeader' => true, // Allow the web server to send the content-length header
    'determineRouteBeforeAppMiddleware' => false,
    
    // Renderer settings
    'view' => [
        'template_path' =>  '/view/'
    ],

    'asset' => [
        'path' => __DIR__
    ],
    
    //db settings
    'db' => [
        'mysql' => include 'mysql.php'
    ],
    
    //cache settings
    'cache' => [
        'redis' => include 'redis.php',
        'prefix' => 'assets_',
        'http' => 60
    ],
    
    // Monolog settings
    'log' => [
        'name' => 'labs-app',
        'password' => 'chars'
    ],
];

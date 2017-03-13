<?php

require __DIR__ . '/../vendor/autoload.php';

session_start();

// Instantiate the app
$settings = require  'settings/main.php';
$app = new \Slim\App($settings);

// Set up dependencies
require 'dependencies/main.php';

// Register middleware
require 'middleware/main.php';

// Register routes
require 'routes/main.php';

// Run app
$app->run();

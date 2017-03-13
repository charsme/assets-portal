<?php
// Routes
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/', function (Request $request, Response $response, $args) {
    return $response->withJson(__DIR__);
});

$app->get('/css/{version}/{item}.css', function (Request $request, Response $response, $args) {
});

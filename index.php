<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

// Create and configure Slim app
$app = new \Slim\App;

// Define app routes
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello " . "$name");

    return $response;
});

// Run app
$app->run(); // http://localhost:8080/slim/hello/world

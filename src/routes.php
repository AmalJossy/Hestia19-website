<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/{name}', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/name' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
// $app->get('/', function (Request $request, Response $response, array $args) {
//     // Sample log message
//     $this->logger->info("Slim-Skeleton '/' route");

//     // Render index view

//     // return $this->view->render($response, 'home.twig');
// });
$app->get('/', 'Page_controller:index');
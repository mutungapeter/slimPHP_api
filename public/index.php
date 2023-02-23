<?php

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;

require __DIR__ .'/../vendor/autoload.php';
require __DIR__ .'/../config/db.php';

$app = AppFactory::create();

$app->get('/{name}', function (Request $request, Response $response, array $args) {
    $response->getBody()->write("Hello,");
    return $response;
});

//Friends Routes

require __DIR__ . '/../Routes/friends.php';

$app->run();

?>
<?php

use Phalcon\Mvc\Router;

$router = new Router(false);
$router->setUriSource(
    Router::URI_SOURCE_SERVER_REQUEST_URI
);
$router->removeExtraSlashes(true);
$router->setDefaultNamespace("Rita\\Controllers");
$router->setDefaultController("index");
$router->setDefaultAction("index");

// Define your routes here
$router->add(
    "/member/login",
    [
        "controller" => "member",
        "action"     => "login",
    ]

);

$router->add(
    "/guestbook",
    [
        "controller" => "guestbook",
        "action"     => "login",
    ]

);

return $router;
?>

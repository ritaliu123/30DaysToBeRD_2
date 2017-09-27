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
    "/member",
    [
        "controller" => "member",
        "action"     => "member",
    ]

);

$router->add(
    "/member/profile",
    [
        "controller" => "member",
        "action"     => "profile",
    ]

);

$router->add(
    "/member/register",
    [
        "controller" => "member",
        "action"     => "register",
    ]

);

$router->add(
    "/guestbook",
    [
        "controller" => "guestbook",
        "action"     => "guestbook",
    ]

);

$router->add(
    "/guestbook/message",
    [
        "controller" => "guestbook",
        "action"     => "message",
    ]

);

$router->add(
    "/guestbook/reply",
    [
        "controller" => "guestbook",
        "action"     => "reply",
    ]

);

?>

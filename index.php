<?php

require_once "controller/tableController.php";
$data = require "data/userdata.php";

require_once "Router/Router.php";
$router = new Router;

require 'routs.php';

$uri = trim(substr(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), 0,strpos($_SERVER['REQUEST_URI'],'?')),"/") ;

require $router->direct($uri);
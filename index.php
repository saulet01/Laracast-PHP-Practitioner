<?php

$database = require 'core/bootstrap.php';

$router = Router::load('routes.php');

require $router->direct(Request::uri());

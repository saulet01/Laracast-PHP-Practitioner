<?php

$query = require 'core/bootstrap.php';

require Router::load('routes.php') ->direct(Reuquest::uri());

<?php

$database = require 'core/bootstrap.php';

//die(var_dump($_SERVER['REQUEST_URI']));

//require 'controllers/index.php';

$router = new Router;

require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router -> direct($uri);

die(var_dump(trim($_SERVER['REQUEST_URI'], '/')));

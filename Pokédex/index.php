<?php

use Model\Routes\Router;

require_once ('models/Routes/Router.php');


    $Router = new Router();
    $Router->routing($_GET,$_POST);

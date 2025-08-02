<?php

use App\Core\App;
use App\Providers\AppServiceProvider;
use League\Container\Container;

require "../vendor/autoload.php";



$container = new Container();
$container ->addServiceProvider(new AppServiceProvider());
$logger = $container ->get(('logger'));
var_dump($logger);


die();

$app = new App();

// var_dump($app);

// register routes

$app->run();
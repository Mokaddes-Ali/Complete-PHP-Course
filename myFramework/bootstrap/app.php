<?php

use App\Core\App;
use App\Core\Container;
use App\Core\View;
use App\Providers\AppServiceProvider;
use App\Core\Example;
use League\Container\ReflectionContainer;

require "../vendor/autoload.php";


$container = Container::getInstance();

// Auto load without register and provider in AppServiceProvider
$container->delegate(new ReflectionContainer());


$container ->addServiceProvider(new AppServiceProvider());


$app = new App();

$app->run();
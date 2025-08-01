<?php

use App\Core\App;
use Spatie\Ignition\Ignition;
use League\Container\Container;

require "../vendor/autoload.php";

Ignition::make()->register();

// setup
$container = new Container();
// add a service by container
$container->add('name', function(){
    return 'Jon Doe';
});

var_dump($container->get('name'));

die();

$app = new App();

// var_dump($app);

// register routes

$app->run();
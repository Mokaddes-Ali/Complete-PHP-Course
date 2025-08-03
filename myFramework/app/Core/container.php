<?php

namespace App\Core;
use League\Container\Container as LeagueContainer;

class Container{

    public static $instance;

    public static function getInstance(){
        // if(!isset(self::$instance)){
        if(is_null(static::$instance)){
            static::$instance = new LeagueContainer();
        }
        return static::$instance;
    }
}
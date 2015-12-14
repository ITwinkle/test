<?php

class Factory
{
    public function __construct(){}

    public static function factory($class){
        include $class.'.php';
        return new $class;
    }
}
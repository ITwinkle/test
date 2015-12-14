<?php

class Mixin
{
    protected $array = [];

    public function mix($name,$class){
        $this->array[$name] = new $class;
    }

    public function __call($method,$params){
        foreach($this->array as $object){
            if(method_exists($object,$method)){
                return call_user_func_array([$object,$method],$params);
            }
        }
    }
}
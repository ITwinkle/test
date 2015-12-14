<?php

class Adapter implements IAdapter
{

    private $component;

    public function __construct(){
        $this->component = new A();
    }

    public function write()
    {
        return $this->component->writeMsg();
    }
}
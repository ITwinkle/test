<?php

class Decorator implements IDecorator
{
    protected $component;

    public function __construct(IDecorator $component){
        $this->component = $component;
    }

    public function getComponent(){
        return $this->component;
    }

    public function Operation(){
        return $this->getComponent()->Operation();
    }
}
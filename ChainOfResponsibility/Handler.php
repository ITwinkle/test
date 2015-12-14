<?php

abstract class Handler
{
    protected $next;

    public function setNext($handler){
        $this->next = $handler;
    }

    protected function getNext(){
        return $this->next;
    }

    abstract public function message($msg);
}
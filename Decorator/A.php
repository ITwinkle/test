<?php

class A extends  Decorator
{
    public function Operation(){
        return 'A: '.parent::Operation();
    }
}
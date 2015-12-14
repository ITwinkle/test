<?php

class B extends Decorator
{
    public function Operation(){
        return 'B :'.parent::Operation();
    }
}
<?php

class B extends Handler
{

    public function message($msg)
    {
        if($msg == 2){
            echo __CLASS__;
        }else{
            if($this->getNext()){
                $this->getNext()->message($msg);
            }
            return false;
        }
    }
}
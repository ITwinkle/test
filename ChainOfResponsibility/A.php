<?php

/**
 * Created by PhpStorm.
 * User: ihor
 * Date: 03.11.15
 * Time: 1:21
 */
class A extends Handler
{
    public function message($msg){
        if($msg == 1){
            echo __CLASS__;
        }else{
            if($this->getNext()){
                $this->getNext()->message($msg);
            }
            return false;
        }
    }
}
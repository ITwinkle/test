<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

/*                                                      !!      Simple  patterns   !!                                  */
/*
 ************************DECORATOR - добавление обьекту новых поведений
include "Decorator/IDecorator.php";
include "Decorator/Decorator.php";
include "Decorator/Component.php";
include "Decorator/A.php";
include "Decorator/B.php";



$component = new Component();
$a = new A($component);
$b = new B($component);
$c = new A($b);

echo $a->Operation().'<br/>';
echo $c->Operation();
*/


/*
 * ***************************Abstract factory
include "Factory/IFactory.php";
include "Factory/Factory.php";

$a = Factory::factory('A');
echo $a->writeMsg();
$b = Factory::factory('B');
echo $b->writeMsg();
*/


/*
 * ************************Adapter
include "Adapter/IAdapter.php";
include "Adapter/A.php";
include "Adapter/Adapter.php";


$a = new Adapter();
echo $a->write();
*/


/**********************Mixin
include "Mixin/Mixin.php";
include "Mixin/A.php";
include "Mixin/B.php";

$a = new A();
$a->mix('b','B');
echo $a->msg();
*/

/*
 * *****************Chain of Responsibility
include "ChainOfResponsibility/Handler.php";
include "ChainOfResponsibility/A.php";
include "ChainOfResponsibility/B.php";

$a = new A();
$b = new B();
$a->setNext($b);

$a->message(2);
*/

<?php

//Объяснить как работают ссылки на объект, присвоение объекта разным переменным,
// передача объекта в качестве аргумента, копирование объекта

class A
{
    public $a;

    public function __construct()
    {
        $this->a = "hello!";
    }

    public function out()
    {
        echo 'prop a= ',$this->a,'<br/>';
    }
}

function func($a)
{
    $a->a = "function";
    $a->out();
}

function func2(&$a)
{
    $a->a = "function";
    $a->out();
}

echo "obj с = obj a <br/>";
$a = new A();
$c = $a;
$a->a = 'test!';
$a->out();
$c->out();

echo "obj c =& obj a <br/>";
$c = &$a;
$a->a = 'test2!';
$a->out();
$c->out();

echo "obj c = clone obj a <br/>";
$c = clone $a;
$a->a = 'test3!';
$a->out();
$c->out();

echo "func (obj a) <br/>";
func($a);
$a->out();

$a->a = "test3";
echo "func (& obj a) <br/>";
func($a);
$a->out();
<?php

trait Singleton
{
    static private $instance;

    private function __construct()
    {
    }  // Защищаем от создания через new Singleton

    private function __clone()
    {
    }  // Защищаем от создания через клонирование

    private function __wakeup()
    {
    }  // Защищаем от создания через unserialize

    static public function getInstance()
    {
        if (empty(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}

/**
 * Class Foo
 * @method static Foo getInstance()
 */
class Foo
{
    use Singleton;

    private $bar = 0;

    public function incBar()
    {
        $this->bar++;
    }

    public function getBar()
    {
        return $this->bar;
    }
}

class Test extends Foo
{
    use Singleton;

    private $bar = 0;

    public function incBar()
    {
        $this->bar++;
    }

    public function getBar()
    {
        return $this->bar;
    }
}

/*
Применение
*/

$foo = Foo::getInstance();
$foo->incBar();

var_dump($foo->getBar());

$foo = Foo::getInstance();
$foo->incBar();

var_dump($foo->getBar());

$test = Test::getInstance();
$test->incBar();

var_dump($test->getBar());
<?php

trait Singleton
{
    static private $instance;

    private function __construct()
    { /* ... @return Singleton */
    }  // Защищаем от создания через new Singleton

    private function __clone()
    { /* ... @return Singleton */
    }  // Защищаем от создания через клонирование

    private function __wakeup()
    { /* ... @return Singleton */
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

/*
Применение
*/

$foo = Foo::getInstance();
$foo->incBar();

var_dump($foo->getBar());

$foo = Foo::getInstance();
$foo->incBar();

var_dump($foo->getBar());
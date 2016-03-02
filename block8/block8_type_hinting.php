<?php

interface ITest
{
    public function evil();

    public function hell();
}

abstract class TestAbstract implements ITest
{
    protected $test;

    public function __construct()
    {
        $this->test = func_get_args();
    }

    public function doSmth(Itest $test)
    {
        $element = $test->evil();
        return $element;
    }
}

class Resident extends TestAbstract
{
    public function test()
    {
        return 'test';
    }

    public function evil()
    {
        return 'evil';
    }

    public function hell()
    {
        return 'hell';
    }

    public function kludge(TestAbstract $testAbs, Absolute $abs = null)
    {
        return $testAbs->doSmth($abs);   // If null then wont be erorrs
    }
}

class Absolute implements ITest
{
    public function evil()
    {
        return 'evil';
    }

    public function hell()
    {
        return 'hell';
    }
}

$a = new Absolute();

$b = new Resident();

echo $b->doSmth($a);

echo $b->kludge($b,$a);
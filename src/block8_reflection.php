<?php

abstract class BaseModel
{
    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function toArray()
    {
        $data = [];

        $refclass = new ReflectionClass($this);

        foreach ($refclass->getProperties(ReflectionProperty::IS_PROTECTED) as $property) {
            $name = $property->getName();

            $data[$name] = $this->$name;
        }

        return $data;
    }
}

class TestModel extends BaseModel
{
    protected $id;
    protected $name;
    protected $price;

    public function __construct()
    {
        $this->id = 1;
        $this->name = 'Test';
        $this->price = 12.56;
    }
}

$a = new TestModel();
var_dump($a->toArray());
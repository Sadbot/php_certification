<?php


class FileDataIterator implements \Iterator
{
    private $var = array();

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
        }
    }

    public function rewind()
    {
        reset($this->var);
    }

    public function current()
    {
        $var = current($this->var);
        return $var;
    }

    public function key()
    {
        $var = key($this->var);
        return $var;
    }

    public function next()
    {
        $var = next($this->var);
        return $var;
    }

    public function valid()
    {
        $key = key($this->var);
        $var = ($key !== NULL && $key !== FALSE);
        return $var;
    }
}

class FileDataCollection implements \IteratorAggregate
{
    private $items = array();
    private $count = 0;

    // Реализация интерфейса IteratorAggregate
    public function getIterator()
    {
        return new FileReadingIterator($this->items);
    }

    public function add($value)
    {
        $this->items[$this->count++] = $value;
    }
}


class FileObject
{
    //Resource
    private $_file = NULL;
    // FileDataCollection
    public $_data = NULL;
    //File name
    public $_filename = '';

    public function __construct($files)
    {
        foreach ($files as $key => $value) {

        }

        $this->_data = new FileDataCollection();
    }
}

$coll = new MyCollection();
$coll->add('value 1');
$coll->add('value 2');
$coll->add('value 3');

foreach ($coll as $key => $val) {
    echo "ключ/значение: [$key -> $val]\n\n";
}
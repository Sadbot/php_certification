<?php

class FileDataCollection implements \IteratorAggregate
{
    private $items = array();
    private $count = 0;

    // Реализация интерфейса IteratorAggregate
    public function getIterator()
    {
        return new FileDataIterator($this->items);
    }

    public function getLast()
    {
        $iterator = new FileDataIterator($this->items);
        return $iterator->last();
    }

    public function add($value)
    {
        $this->items[$this->count++] = $value;
    }
}
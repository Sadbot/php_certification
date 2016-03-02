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
        return new FileDataIterator($this->items);
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
    //Trace errors
    public $errors = [];

    public function __construct($filename)
    {
        $this->_filename = $filename;
        $this->_data = new FileDataCollection();
        $this->errors = [];
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function create()
    {
        $this->_file = fopen($this->_filename, 'c');

        if ($this->fcheck('c') && $this->flock('c')) {
            ftruncate($this->_file, 0);

            $this->uflock();
        }
        return $this;
    }

    public function read()
    {
        $this->_file = fopen($this->_filename, 'r');

        if ($this->fcheck('r') && $this->flock('r')) {
            while ($line = fgets($this->_file)) {
                $this->_data->add($line);
            }
            $this->uflock();
        }
        return $this->_data->getIterator();
    }

    public function rename($newName)
    {
        $this->_file = fopen($this->_filename, 'c');

        if ($this->fcheck('c') && $this->flock('c')) {
            rename($this->_filename, $newName);

            $this->uflock();
        }
        return $this;
    }

    public function write($text, $length = 0)
    {
        $this->_file = fopen($this->_filename, 'c');

        if ($this->fcheck('c') && $this->flock('c')) {
            fwrite($this->_file, $text, $length);

            $this->uflock();
        }
        return $this;
    }

    public function add($text, $length = 0)
    {
        $this->_file = fopen($this->_filename, 'a');

        if ($this->fcheck('a') && $this->flock('a')) {
            fwrite($this->_file, $text, $length);
            $this->uflock();
        }
        return $this;
    }

    public function delete()
    {
        $this->_file = fopen($this->_filename, 'c');

        if ($this->fcheck('c') && $this->flock('c')) {
            unlink($this->_filename, $this->_file);
            $this->uflock();
        }
        return $this;
    }

    private function fcheck($mode)
    {
        switch ($mode) {
            case "a":
            case "c":
            case "w":
                if (!is_resource($this->_file)) {
                    $this->addError("Cannot write to file {$this->_filename}", 1);
                    return false;
                }
                return true;
            case "r":
                if (!is_resource($this->_file)) {
                    $this->addError("Cannot read file {$this->_filename}", 1);
                    return false;
                }
                return true;
            default:
                $this->addError("Wrong mode on checking file!", 0);
        }
        return false;
    }

    private function flock($mode)
    {
        switch ($mode) {
            case "a":
            case "c":
            case "w":
                if (!flock($this->_file, LOCK_EX)) {
                    $this->addError("File is locked. Cannot read file {$this->_filename}", 2);
                    return false;
                }
                return true;
            case "r":
                if (!flock($this->_file, LOCK_SH)) {
                    $this->addError("Cannot read file {$this->_filename}, file is locked.", 2);
                    return false;
                }
                return true;
            default:
                $this->addError("Wrong lock mode.", 0);
        }
        return false;
    }

    private function uflock()
    {
        return flock($this->_file, LOCK_UN);
    }


    private function addError($errorText, $errorNo)
    {
        $this->errors[] = [
            'text' => $errorText,
            'no' => $errorNo
        ];
    }
}
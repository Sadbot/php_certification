<?php

class FileObject
{
    const ERROR_LOG = 1;
    const ERROR_SILENCE = 0;

    //Resource
    protected $_file = NULL;
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
        $this->fopen('c');
        if ($this->fcheck('c') && $this->flock('c')) {
            ftruncate($this->_file, 0);
            $this->uflock();
        }
        return $this;
    }

    //$mode=1 skip empty lines
    public function read($mode = 0)
    {
        $this->fopen('r');

        if ($this->fcheck('r') && $this->flock('r')) {
            while ($line = fgets($this->_file)) {
                $line = trim($line);
                if ($mode == 1) {
                    continue;
                }
                $this->_data->add($line);
                return $this->_data->getIterator();
            }
            $this->uflock();
        }
        return false;
    }

    //$mode=1 skip empty lines
    public function gets($mode = 0)
    {
        if (!is_resource($this->_file)) {
            $this->fopen('r');
        }

        if ($this->fcheck('r') && $this->flock('r')) {
            $line = fgets($this->_file);
            $line = trim($line);
            if ($mode == 1) {
                while (empty($line) && $line !== false) {
                    $line = fgets($this->_file);
                }
            }
            $this->_data->add($line);
            $this->uflock();

            return $this->_data->getLast();
        }
        return false;
    }

    public function rename($newName, $rewrite_mode = 0)
    {
        $this->fopen('c');

        if (!is_string($newName) || empty($newName)) {
            $this->addError("Error name {$newName} for file {$this->_filename}", 1);
            return $this;
        }

        if ($this->fcheck('c') && $this->flock('c')) {
            if (true === rename($this->_filename, $newName, $this->_file)) {
                $this->_filename = $newName;
            } else {
                $this->addError("Error in renaming file {$this->_filename}!", 0);
            }
            $this->uflock();
        }
        return $this;
    }

    public function write($text)
    {
        $this->fopen('c');

        if ($this->fcheck('c') && $this->flock('c')) {
            ftruncate($this->_file, 0);
            fwrite($this->_file, $text);

            $this->uflock();
        }
        return $this;
    }

    public function add($text)
    {
        $this->fopen('a');
        if ($this->fcheck('a') && $this->flock('a')) {
            fwrite($this->_file, $text);
            $this->uflock();
        }
        return $this;
    }

    //$mode=1 unset data array
    public function delete($mode = 0)
    {
        $this->fopen('c');

        if ($this->fcheck('c') && $this->flock('c')) {
            unlink($this->_filename, $this->_file);
            if ($mode == 1) {
                $this->_data = new FileDataCollection();
            }
            $this->uflock();
        }
        return $this;
    }

    protected function fopen($mode = 'r')
    {
        switch ($mode) {
            case "a":
                if (!($this->_file = fopen($this->_filename, 'a', true))) {
                    $this->addError("Cannot open file {$this->_filename} on write with mode a", 1);
                    return false;
                }
                return true;
            case "c":
                if (!($this->_file = fopen($this->_filename, 'c', true))) {
                    $this->addError("Cannot open file {$this->_filename} on write with mode c", 1);
                    return false;
                }
                return true;
            case "w":
                if (!($this->_file = fopen($this->_filename, 'w', true))) {
                    $this->addError("Cannot open file {$this->_filename} on write with mode w", 1);
                    return false;
                }
                return true;
            case "r":
                if (!($this->_file = fopen($this->_filename, 'r', true))) {
                    $this->addError("Cannot read file {$this->_filename} on read with mode r", 1);
                    return false;
                }
                return true;
            default:
                $this->addError("Wrong mode on open file {$this->_filename}!", 0);
        }
        return false;
    }

    protected function fcheck($mode)
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

    protected function flock($mode)
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


    private function addError($errorText, $errorNo, $errorMode = ERROR_LOG)
    {
        if ($errorMode === ERROR_LOG) {
            $this->errors[] = [
                'errorMsg' => $errorText,
                'errorNo' => $errorNo
            ];
        }
    }
}

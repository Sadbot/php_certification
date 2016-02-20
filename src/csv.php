<?php

namespace Cert;

class CSV
{
    private $_file_name;
    private $_file;

    /**
     * Constructor Method.
     * @param string $filename local or global file path
     */
    public function __construct($filename)
    {
        if (!file_exists($filename)) {
            throw new \Exception("No file with name {$filename}!", 1);
        }
        $this->_file_name = $filename;
    }
    /**
     * Method for checking CSV files.
     * @param string $parameter for read\write mode.
     */
    private function isOpen($parameter = 'r')
    {
        $this->_file = \fopen($this->_file_name, $parameter);
        if ($this->_file) {
            return true;
        }

        return false;
    }
    /**
     * Method for reading CSV files.
     * @param string $delimiter delimiters for csv file.
     */
    public function readCSV($delimiter = ',')
    {
        if (!$this->isOpen('r')) {
            throw new \Exception('Error in open file on read', 2);
        }
        while (false !== ($data = \fgetcsv($this->_file, 1000, $delimiter))) {
            foreach ($data as $value) {
                $this->debug($data);
            }
        }
        \fclose($this->_file);
    }

    /**
     * Recursive putcsv.
     *
     * @param string | array
     */
    private function putDataRecursive($array)
    {
        foreach ($text as $value) {
            if (is_array($value)) {
                $this->putDataRecursive($value);
            } else {
                \fputcsv($this->_file, $value);
            }
        }
    }
    /**
     * Write to CSV File.
     *
     * @param mixed  $text      input data
     * @param string $delimiter delimiters for csv file.
     */
    public function writeCSV(array $text, $delimiter = ',')
    {
        if (!$this->isOpen('a+')) {
            throw new \Exception('Error in open file on write to end', 3);
        }
        $this->putDataRecursive($text);
        \fclose($this->_file);
    }
    /**
     * Method for output csv data on stdout.
     */
    public function debug(array $data)
    {
        // \print_r($data);
    }
}

$filename = 'test.csv';

try {
    $csv = new CSV($filename);
    $csv->writeCSV([
      '2 - High',
      'Test1',
      'Proposed',
      'asdg',
      'rtuetu',
      'asdg',
      'fdgmgfh',
      'rtusrtu',
      'nxfr',
    ]);
    $csv->readCSV();
} catch (\Exception $e) {
    echo $e->getMessage(), ' error code: ', $e->getCode();
}

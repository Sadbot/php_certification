<?php

namespace Cert;

class CSV
{
    private $_file_name;
    private $_file;

    /**
     * Constructor Method.
     * @throws \Exception
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
     * @return boolean
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
     * @throws \Exception
     * @param string $delimiter delimiters for csv file.
     */
    public function readCSV($delimiter = ',')
    {
        if (!$this->isOpen('r')) {
            throw new \Exception('Error in open file on read', 2);
        }
        while (false !== ($data = \fgetcsv($this->_file, 1000, $delimiter))) {
          $this->debugInfo($data);
        }
        \fclose($this->_file);
    }

    /**
     * Recursive putcsv.
     * @param mixed $array
     * @param string $delimiter delimiters for csv file
     */
    private function putDataRecursive($array, $delimiter)
    {
        \fputcsv($this->_file, $array, $delimiter);
        foreach ($array as $value) {
            if (is_array($value)) {
                $this->putDataRecursive($value);
            }
        }
    }
    /**
     * Write to CSV File.
     * @throws \Exception
     * @param mixed  $text      input data
     * @param string $delimiter delimiters for csv file.
     */
    public function writeCSV(array $text, $delimiter = ',')
    {
        if (!$this->isOpen('a+')) {
            throw new \Exception('Error in open file on write to end', 3);
        }
        $this->putDataRecursive($text, $delimiter);
        \fclose($this->_file);
    }
    /**
     * Method for output csv data on stdout.
     * @param array $data output data.
     */
    public function debugInfo(array $data)
    {
        \var_dump($data);
    }
}

$filename = __DIR__.'/test.csv';

try {
    $csv = new CSV($filename);
    $csv->writeCSV([
      'Priority' => '2 - High',
      'Name' => 'Test1',
      'Status' => 'Proposed',
      'Planned Time' => 'asdg',
      'Current Time' => 'rtuetu',
      '% Complete' => 'asdg',
      'Due date' => 'fdgmgfh',
      'Owner' => 'rtusrtu',
      'Creator' => 'nxfr',
    ]);
    $csv->readCSV();
} catch (\Exception $e) {
    echo $e->getMessage(), ' error code: ', $e->getCode();
}

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="image"/>
    <input type="submit"/>
</form>
</body>
</html>


<?php

class File
{
    public $_file;

    public function __construct($file)
    {
        $this->_file = $file;
    }

    public function upload()
    {
        $destination_dir = __DIR__ . 'upload';
        $filename = uniqid(rand(), true) . '.jpg';

        if (!is_dir($destination_dir)) {
            throw new Exception('cannot open dest dir');
        }

        $check = getimagesize($this->_file['tmp_name']);

        if (!$check) {
            throw new Exception('your file not image!');
        }

        $destination_file = $destination_dir . '/' . $filename;

        echo $this->_file['tmp_name'], $destination_file;

        if (!move_uploaded_file($this->_file['tmp_name'], $destination_file)) {
            throw new Exception('cannot move uploaded file!');
        }
        return $destination_file;
    }
}

$file = $_FILES['image'];

var_dump($file);

if (isset($file)) {
    $file = new File($_FILES['image']);

    echo "begin upload file!\n";

    try {
        $res = $file->upload();
        echo 'uploaded file path ', $res, "\n";
    } catch (Exception $e) {
        echo $e->getMessage();
    }

}


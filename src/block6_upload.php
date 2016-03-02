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
        $destination_dir = '/var/www/upload';
        $filename = uniqid(rand()) . '.jpg';

        if (!is_dir($destination_dir)) {
            $oldmask = umask(0);
            mkdir($destination_dir, 0744);
        }

        $check = getimagesize($this->_file['tmp_name']);

        if (!$check) {
            throw new Exception('your file not image!');
        }

        $destination_file = $destination_dir . DIRECTORY_SEPARATOR . $filename;

        echo 'file uploaded to ', $destination_file, "<br/>";

        if (!move_uploaded_file($this->_file['tmp_name'], $destination_file)) {
            throw new Exception('cannot move uploaded file!');
        }
        return $destination_file;
    }
}

if (isset($_FILES['image'])) {

    var_dump($_FILES['image']);
    $file = new File($_FILES['image']);

    try {
        $res = $file->upload();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


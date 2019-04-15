<?php
$path = '/dir1/myfile.php';
$file = 'file1.txt';

// return name of the file with function basename()
echo basename($path) . '<br>';

// return name without extension (i.c. *.php)
echo basename($path, '.php');

// return directory with function dirname()
echo dirname($path) . '<br>';

// check if file exists with function file_exists()
    // or function is_file(), looks only it the directory itself
echo file_exists($file) . '<br>';

// get the whole/absolute path with function realpath()
echo realpath($file) . '<br>';

// check if file is writeable with function is_writeable()
echo is_writeable($file) . '<br>';

// check if file is readable with function is_readable()
echo is_readable($file) . '<br>';

// get filesize with function filesize()
echo filesize('index.php');





?>

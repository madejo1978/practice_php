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

// create a directory
mkdir('testing');

// delete directory
rmdir('testing');

// copy file
    // first parameter is file to be copied
echo copy('file1.txt', 'file2.txt');

// rename
rename('file2.txt','renamedFile.txt');

// delete
unlink('renamedFile.txt');

// output data from file (to string)
echo file_get_contents($file);

// replace data from file
//  echo file_put_contents($file,'This is the replaced Data');

// add data to file

    // step1 fetch it
    $addData = file_get_contents($file);
    // step2 concatinate to add data
    $addData .= ' I have added Data!';
    // step3 replace data
    file_put_contents($file, $addData);

?>

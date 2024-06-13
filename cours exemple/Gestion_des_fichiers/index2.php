<?php 

$path ="dir/dir1/mylife.php";
$file = "test.txt";

// return filename 
// $output = basename($path);

// // return filename without extension
// $output = basename($path, 'php');

// // return the ditname
// $output = dirname($path);

// // check if file exist
// $output = file_exists($file);

// // get absolute path 
// $output = realpath($file);

// // check if it is a file
// $output = is_file($file);

// // check if file is writable
// $output = is_writable($file);

// // check if the file is readable
// $output = is_readable($file);

// // get filesize
// $output = filesize($file);
// echo $output;

// // create a directory
// mkdir("php");

// // remove dir if empty
// $output = rmdir('php');

// // copy file
// $output = copy('test.txt', 'file2.txt');

// rename file
$output = rename('test.txt', 'phpfile.txt')
?>
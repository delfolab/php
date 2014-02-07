<?php
//simple test for using curl in php

$target = "http://example.com";
$file_handle = fopen($target,"r");

while(!feof($file_handle))
 echo fgets($file_handle,4096);
fclose($file_handle);

?>

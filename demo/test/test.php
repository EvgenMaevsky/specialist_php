<?php 
$f = fopen("file.txt", "a+") or die("Can't open file");

//fclose($f);
// fpassthru($f);
// echo fileowner($f);
// $lines = [];
// while( $line = fgetss($f,1024,"<a><br>")){
// 	$lines[] = $line;
// }
// print_r($lines);
// $bytes = [];
// while( !feof($f)){
// 	$bytes[] = fgetc($f);
// }
// print_r($bytes);
// fputs($f, "\nline six");
// fseek($f, -10, SEEK_END);
// rewind($f);
// echo ftell($f);
readfile("file.html");
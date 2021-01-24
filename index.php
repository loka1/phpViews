<?php
// get info
$myfile = fopen("count.txt", "r") or die("Unable to open file!");
$number =  intval(fgets($myfile));
fclose($myfile);

$myfile = fopen("count.txt", "w") or die("Unable to open file!");
fwrite($myfile, $number + 1);
fclose($myfile);
echo $number;

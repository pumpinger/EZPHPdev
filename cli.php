<?php
var_dump($_SERVER);

exit;
print_r($argv);

exit;
// ask for input
fwrite(STDOUT, "Enter your name: ");
 
// get input
$name = trim(fgets(STDIN));
 
// write input back
fwrite(STDOUT, "Hello, $name!");
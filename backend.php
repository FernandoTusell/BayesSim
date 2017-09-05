<?php
// get the q parameter from URL
$q = $_REQUEST["q"];

$fname = "z.txt" ;
$file = fopen($fname, 'w');//creates new file
fwrite($file, $q);
fclose($file);

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>

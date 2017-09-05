<?php
$q = $_REQUEST["q"];
$tmp = explode(",", $q) ;
$dni      = $tmp[0] ;
$grade    = $tmp[1] ;
$fname    = "notas/" . $dni . ".nota" ;
$file = fopen($fname, 'w');
fwrite($file, $dni . ";" . date ( "d-m-Y H:i:s" , time() ) . ";" . $grade) ;
fwrite($file, "\n") ;
fclose($file);
?>

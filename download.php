<?php

$file = $_GET['file'] .".pdf";
header("content-disposition: attachment; filename=" .urlencode($file));
$fb = fopen($file, "r");
while(!feof($fb)){
    echo fread($fb, 8192);
    flush();
}
fclose($fb);


$f = $_GET['f'] .".pdf";
header("content-disposition: attachment; filename=" .urlencode($f));
$fc = fopen($f, "r");
while(!feof($fc)){
    echo fread($fc, 8192);
    flush();
}
fclose($f);

?>
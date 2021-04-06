<?php
/*$passato=new DateTime("1969-12-31 23:59:00");
echo $passato->getTimestamp()."\n";

$unix = new DateTime('1970-01-01   00:00:00');
echo $unix->getTimestamp()."\n";

$un_minuto_dopo = new DateTime('1970-01-01 00:01:00');
echo $un_minuto_dopo->getTimestamp()."\n";

$today = new DateTime();
echo $today->getTimestamp()."\n";
echo $today->format('d-M-Y');*/



$data=new DateTime("2021-03-23");
$dataTimeStamp=$data->getTimestamp();

$ora=new DateTime();
$oraTimeStamp= $ora->getTimestamp();

var_dump($dataTimeStamp > $oraTimeStamp) ;
?>
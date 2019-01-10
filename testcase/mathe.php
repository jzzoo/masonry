<?php

$total = 1234;

echo $total."\n";



echo base64_encode( dechex($total) )."\n";

echo hexdec(base64_decode(  base64_encode( dechex($total) )  ))."\n";

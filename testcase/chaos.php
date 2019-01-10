<?php

$chaos = new Masonry\Chaos();

echo "\n---encode--\n";
$re = $chaos->encode(123456);
var_dump($re);
echo "\n---decode--\n";
$re = $chaos->decode($re);
var_dump($re);
echo "\n---encode--\n";
$re = $chaos->encode(99999999);
var_dump($re);
echo "\n---decode--\n";
$re = $chaos->decode($re);
var_dump($re);

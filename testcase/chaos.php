<?php

$chaos = new Masonry\Chaos();
$re = $chaos->encode(123456);
var_dump($re);

$re = $chaos->decode($re);
var_dump($re);


$re = $chaos->encode(99999999);
var_dump($re);

$re = $chaos->decode($re);
var_dump($re);

<?php

$tools = new Masonry\Tools();

echo "\n---count--\n";
$re = $tools->count('123456');
var_dump($re);
echo "\n---count--\n";
$re = $tools->count([1,2,3]);
var_dump($re);
echo "\n---count--\n";
$obj = new stdClass();
$re = $tools->count($obj);
var_dump($re);

echo "\n---env--\n";
$uniqid = date('Ymd');
putenv("CUNIQID={$uniqid}");
$re = $tools->env('CUNIQID','xxx');
var_dump($re);
echo "\n---env--\n";
$re = $tools->env('CUNIQLS','xxx');
var_dump($re);
echo "\n---env--\n";
putenv("MASON123=\"123\"");
var_dump(getenv('MASON123'));
$re = $tools->env('MASON123','xxx');
var_dump($re);

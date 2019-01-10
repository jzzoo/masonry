<?php

$array = new Masonry\Arrays();

echo "\n---array_add--\n";
$re = $array->array_add(['a'=>'aa','b'=>'bb'],'c','cc');
var_dump($re);

echo "\n---array_collapse--\n";
$re = $array->array_collapse([[1,2,3],[4,5,6],[7,8,9]]);
var_dump($re);

echo "\n---array_divide--\n";
$re = $array->array_divide(['a'=>'aa','b'=>'bb']);
var_dump($re);

echo "\n---array_prepend--\n";
$re = $array->array_prepend(['a'=>'aa','b'=>'bb'],'cc');
var_dump($re);
$re = $array->array_prepend(['a'=>'aa','b'=>'bb'],'cc','c');
var_dump($re);
$re = $array->array_prepend(['aa','bb'],'cc','c');
var_dump($re);

echo "\n---array_random--\n";
$re = Masonry\Arrays::array_random([1,2,3,4,5,6]);
var_dump($re);
$re = Masonry\Arrays::array_random(['a','b','c']);
var_dump($re);
$re = Masonry\Arrays::array_random([1,2,3,4,5,6],3);
var_dump($re);
try {
$re = Masonry\Arrays::array_random([1,2,3,4,5,6],10);
var_dump($re);
}catch (\Exception $e) {
   var_dump($e->getMessage());
}
try {
$re = Masonry\Arrays::array_random([1,2,3,4,5,6],'a');
var_dump($re);
}catch (\Exception $e) {
   var_dump($e->getMessage());
}

echo "\n---head--\n";
$re = Masonry\Arrays::head([1,2,3,4,5,6]);
var_dump($re);
$re = Masonry\Arrays::head(['a','b','c']);
var_dump($re);
$re = Masonry\Arrays::head([1,2,3,4,5,6]);
var_dump($re);
try {
$re = Masonry\Arrays::head();
var_dump($re);
}catch (\Exception $e) {
   var_dump($e->getMessage());
}
try {
$re = Masonry\Arrays::head([1,2,3,4,5,6],'a');
var_dump($re);
}catch (\Exception $e) {
   var_dump($e->getMessage());
}

echo "\n---last--\n";
$re = Masonry\Arrays::last([1,2,3,4,5,6]);
var_dump($re);
$re = Masonry\Arrays::last(['a','b','c']);
var_dump($re);
$re = Masonry\Arrays::last([1,2,3,4,5,6],3);
var_dump($re);
try {
$re = Masonry\Arrays::last([]);
var_dump($re);
}catch (\Exception $e) {
   var_dump($e->getMessage());
}
try {
$re = Masonry\Arrays::last([1,2,3,4,5,6],'a');
var_dump($re);
}catch (\Exception $e) {
   var_dump($e->getMessage());
}

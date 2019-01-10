<?php

$string = new Masonry\Strings();

echo "\n---camel_case--\n";
$re = $string->camel_case('aaa_bbb');
var_dump($re);
$re = $string->camel_case('aaa-bbb');
var_dump($re);
$re = $string->camel_case('aaa-bbb_ccc');
var_dump($re);
$re = $string->camel_case('Aaa-bbb_ccc');
var_dump($re);
try {
    $re = $string->camel_case();
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}


echo "\n---end_with--\n";
$re = $string->end_with('Aaa-bbb_ccc','ccc');
var_dump($re);
$re = $string->end_with('Aaa-bbb_ccc','xxx');
var_dump($re);
try {
    $re = $string->end_with();
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->end_with('Aaa-bbb_ccc');
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}


echo "\n---start_with--\n";
$re = $string->start_with('Aaa-bbb_ccc','ccc');
var_dump($re);
$re = $string->start_with('Aaa-bbb_ccc','xxx');
var_dump($re);
$re = $string->start_with('Aaa-bbb_ccc','Aaa');
var_dump($re);
try {
    $re = $string->start_with();
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->start_with('Aaa-bbb_ccc');
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}

echo "\n---str_after--\n";
$re = $string->str_after('Aaa-bbb_ccc','ccc');
var_dump($re);
$re = $string->str_after('Aaa-bbb_ccc','bbb');
var_dump($re);
$re = $string->str_after('Aaa-bbb_ccc','aaa');
var_dump($re);
try {
    $re = $string->str_after();
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->str_after('Aaa-bbb_ccc');
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}

echo "\n---str_before--\n";
$re = $string->str_before('Aaa-bbb_ccc','ccc');
var_dump($re);
$re = $string->str_before('Aaa-bbb_ccc','bbb');
var_dump($re);
$re = $string->str_before('Aaa-bbb_ccc','aaa');
var_dump($re);
try {
    $re = $string->str_before();
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->str_before('Aaa-bbb_ccc');
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}

echo "\n---str_contains--\n";
$re = $string->str_contains('Aaa-bbb_ccc','ccc');
var_dump($re);
$re = $string->str_contains('Aaa-bbb_ccc','bbb');
var_dump($re);
$re = $string->str_contains('Aaa-bbb_ccc',['aaa','bbb']);
var_dump($re);
$re = $string->str_contains('Aaa-bbb_ccc',['xxx','mmm']);
var_dump($re);
try {
    $re = $string->str_contains();
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->str_contains('Aaa-bbb_ccc');
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->str_contains('Aaa-bbb_ccc',123);
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->str_contains('Aaa-bbb_ccc',[123]);
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->str_contains('Aaa-bbb_ccc',[]);
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}

echo "\n---str_finish--\n";
$re = $string->str_finish('Aaa-bbb_ccc','ccc');
var_dump($re);
$re = $string->str_finish('Aaa-bbb_ccc','bbb');
var_dump($re);
$re = $string->str_finish('Aaa-bbb_ccc','/');
var_dump($re);
try {
    $re = $string->str_finish();
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->str_finish('Aaa-bbb_ccc');
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}

echo "\n---str_limit--\n";
$re = $string->str_limit('Aaa-bbb_ccc',3);
var_dump($re);
$re = $string->str_limit('Aaa-bbb_ccc',4,'...');
var_dump($re);
$re = $string->str_limit('Aaa-bbb_ccc',5,"[...]");
var_dump($re);
$re = $string->str_limit('Aaa-bbb_ccc',100);
var_dump($re);
$re = $string->str_limit('测试哦',100);
var_dump($re);
$re = $string->str_limit('测试哦',2,'hehe');
var_dump($re);
try {
    $re = $string->str_limit();
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->str_limit('Aaa-bbb_ccc');
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->str_limit('Aaa-bbb_ccc','aaa');
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}

echo "\n---str_random--\n";
$re = $string->str_random(10);
var_dump($re);
$re = $string->str_random(20);
var_dump($re);
$re = $string->str_random(30);
var_dump($re);
try {
    $re = $string->str_random();
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->str_random(-1);
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->str_random(0);
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->str_random(800);
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}

echo "\n---class_basename--\n";
$re = $string->class_basename("aaa\bbb\ccc");
var_dump($re);
$re = $string->class_basename("mmm\xxx");
var_dump($re);
$re = $string->class_basename("aaa");
var_dump($re);
try {
    $re = $string->class_basename();
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->class_basename("aaaa/iii");
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
try {
    $re = $string->class_basename("aaaa/iii",111);
    var_dump($re);
} catch (\Exception $e) {
    var_dump($e->getMessage());
}

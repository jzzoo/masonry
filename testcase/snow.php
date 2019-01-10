<?php

echo "\r\n------开始单进程测试------\r\n";
$arr = array();
for( $i=0;$i<20000;$i++) {
    $snow = new Masonry\Snowflake( 1 );
    $id = $snow->createId();
    if( in_array($arr,$id) ) {
        echo $id . "重复-\r\n";
    } else {
        $arr[] = $id;
    }
}
echo "\r\n------单进程测试完成------\r\n";

# masonry
PHP extensions written using zephir-lang

> Laravel - like helper functions are provided .

> You can add extension=./lib/masonry. So directly to your own php.ini, notice that it is php-7.2 .

* 开发环境
```
  1. CentOS Linux release v7.6.1810 (Core)
  2. gcc (GCC) 4.8.5 20150623 (Red Hat 4.8.5-36)
  3. automake (GNU automake) 1.13.4
  4. autoconf (GNU Autoconf) 2.69
  5. make GNU Make 3.82
  6. PHP v7.2.13
  7. zephir_parser(php-zephir-parser) v1.1.4
  8. zephir v0.10.12-664381ee57
```  
  
* 安装配置
```
  1. git clone https://github.com/phalcon/php-zephir-parser.git
  2. cd php-zephir-parser/
  3. yum install re2c -y
  4. phpize
  5. ./configure --with-php-config=/www/server/php/72/bin/php-config
  6. make && make install 
  7. extension=zephir_parser.so
  8. php --ri "Zephir Parser"
  9. git clone https://github.com/phalcon/zephir.git
  10. cd zephir/
  11. git tag
  12. git checkout 0.10.12
  13. ./install -c
  14. zephir help
  15. zephir version
```
* 构建扩展
```
  1. zephir init ext_name
``` 
* 安装扩展
```
  1. zephir build (or zephir builddev)
  2. extension=ext_name.so
 ``` 
 
* 其他命令 
```
  1. zephir fullclean
  2. zephir builddev
```

> In summary, this is a toy .

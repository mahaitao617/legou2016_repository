<?php


// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

/*定义新的模块方法 define('BIND_MODULE','模块名称')*/
//管理系统模块
//define('BIND_MODULE','Admin');

//卖家端模块
//define('BIND_MODULE','Seller');

//买家端模块
//define('BIND_MODULE','Buyer');

//入口定义
define('APP_PATH','./Application/');
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单
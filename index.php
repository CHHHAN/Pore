<?php

namespace Core;

/**
 * Pore 引导
 *
 * PHP 7+
 * 
 * 预备并引导至 Pore
 * @author CHHHAN <hi@chomin.me>
 * @version 1.0
**/

//ROOT_PATH =  Pore  根目录
//RES_PATH  =  Pore  资源根目录
//LIB_PATH  =  Pore  类库目录
//TR_PATH   =  Pore  盒子目录
//AR_PATH   =  Pore  卡片目录
define('ROOT_PATH', __DIR__ . '/');
define('RES_PATH', ROOT_PATH . 'res/');
define('LIB_PATH', ROOT_PATH . 'lib/');
define('TR_PATH', ROOT_PATH . 'Trunk/');
define('AR_PATH', ROOT_PATH . 'Airta/');

//引入内核框架
require ROOT_PATH . 'core/PORE.php';

//引入配置项
require LIB_PATH . 'core/Config.core.php';

//注册自动加载函数
//定义错误处理函数
spl_autoload_register("Core\PORE::aLoad");
set_error_handler("Core\PORE::WAR");

//定义配置文件
Config::$configPath = 'config.json';

#开始跑...
new PORE;
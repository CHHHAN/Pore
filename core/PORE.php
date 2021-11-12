<?php

namespace Core;

class PORE
{
  public function __construct()
  {
    new Config;
    Route::_Init();
  }

  public static function running()
  {

    if (Config::$PORE['Debug'] == 'TRUE') {
      Debug::_Init();
    }

    Trunk::_Init(Config::$RUNNING['Trunk']);

  }

  //类自动加载
  public static function aLoad($_loadName)
  {
    if (isset(Config::$MAP['Lib'][$_loadName]) == TRUE) {
      require_once LIB_PATH . Config::$MAP['Lib'][$_loadName];
    } elseif (isset(Config::$MAP['Class'][$_loadName]) == TRUE) {
      require_once ROOT_PATH . Config::$MAP['Class'][$_loadName];
    } elseif (isset(Config::$MAP['Trunk'][$_loadName]) == TRUE){
      require_once TR_PATH . Config::$MAP['Trunk'][$_loadName];
    } elseif (isset(Config::$MAP['Airta'][$_loadName]) == TRUE){
      require_once AR_PATH . Config::$MAP['Airta'][$_loadName];
    }
  }

  //错误处理函数
  public static function WAR()
  {
    echo 'WAR!';
  }
}

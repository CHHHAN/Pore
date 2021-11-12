<?php
namespace Core;
class Language{
  public static function _Init($_Airta){
    if (isset(Config::$MAP['Airta'][$_Airta]) == TRUE) {
      require_once AR_PATH . Config::$MAP['Airta'][$_Airta];
      $_Airta::_Init();
    } else {
      echo '<h1>AIRTA 404!</h1>';
    }
  }
}
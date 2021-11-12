<?php
namespace Core;
class Trunk{
  public static function _Init($_Trunk){
    if (isset(Config::$MAP['Trunk'][$_Trunk]) == TRUE) {
      $_Trunk::_Init();
    } else {
      Language::_Init(Config::$RUNNING['Airta']);
    }
  }
}
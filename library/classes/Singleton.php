<?php

abstract class Singleton
{
    private static $_aInstances = array();

    public static function getInstance()
    {
        $sClassName = ucfirst(get_called_class());
        if (class_exists($sClassName)) {
            if (!isset(self::$_aInstances[$sClassName]))
                self::$_aInstances[$sClassName] = new $sClassName();
            return self::$_aInstances[$sClassName];
        }
        return 0;
    }

    public static function gI()
    {
        return self::getInstance();
    }

    final private function __clone()
    {
    }

    private function __construct()
    {
    }
}
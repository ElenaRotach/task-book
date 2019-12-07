<?php
define('ROOT', dirname(__FILE__) . '/');
define('LIB', dirname(__FILE__) . '/library/');
define('APP', dirname(__FILE__) . '/application/');
include LIB . 'framework.php';
App::gi()->start();
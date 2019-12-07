<?php


class App extends Singleton
{
    function start()
    {
        Router::gi()->parse();
        $controller = (Router::gi()->controller . 'Controller')::gi();
        $controller->__call(Router::gi()->action . 'Action');
    }
}
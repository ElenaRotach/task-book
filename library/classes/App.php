<?php


class App extends Singleton
{
    public $user;

    function start()
    {
        if (!isset($this->user)) {
            $this->user = new User();
        }
        Router::gi()->parse();
        $controller = (Router::gi()->controller . 'Controller')::gi();
        $controller->__call(Router::gi()->action . 'Action');
    }
}
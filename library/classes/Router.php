<?php


class Router extends Singleton
{
    public $action = 'index';
    public $controller = false;

    function parse()
    {
        $route = explode('?', $_REQUEST['route']);
        try{
            $route = $route[0];
            $params = isset($route[1]) ? $route[1] : [];

            $route = explode('/', $route);
            if (count($route) === 2){
                $this->controller = $route[0];
                $this->action = $route[1];
            } else {
                throw new Exception('Запрашиваемый адрес не существует');
            }
        } catch (Exception $e) {
            $this->controller = 'error';
            $this->action = 'index';
        }
    }
}
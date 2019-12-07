<?php


class UserController extends Controller
{
    function indexAction()
    {
        $model = new User();
        include ROOT . 'application/views/user/index.html';
    }
}
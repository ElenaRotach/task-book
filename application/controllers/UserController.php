<?php


class UserController extends Controller
{
    public function indexAction()
    {
        $model = App::gI()->user;
        include ROOT . 'application/views/user/index.html';
    }

    public function loginAction()
    {
        $user = App::gI()->user;
        $user->login($_POST['login'], $_POST['password']);
        App::gI()->user = $user;
        $this->indexAction();
    }

    public function logoutAction()
    {
        App::gI()->user = null;
        $this->indexAction();
    }
}
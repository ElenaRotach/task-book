<?php

class User extends Model
{
    private $admin = [
        'id' => 0,
        'login' => 'admin',
        'name' => 'admin',
        'password' => 123,
    ];

    public $id;
    private $login;
    public $name;
    private $password;

    public function getActiveUser()
    {
        return $this;
    }

    public function login($login, $password)
    {
        if ($this->admin['login'] == $login && $this->admin['password'] == $password) {
            $this->id = $this->admin['id'];
            $this->login = $login;
            $this->password = $password;
            $this->name = $this->admin['name'];
        }
    }

    public function logout($user)
    {
        App::gI()->user = null;
    }
}
<?php
require_once('./app/Models/Connector.php');

class userController
{
    protected $user;

    public function login()
    {
        $user = $this->user->login();
    }

    public function add()
    {

    }

    public function logOut()
    {

    }
}

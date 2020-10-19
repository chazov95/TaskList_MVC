<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{

    public function login()
    {
        $user = new User();
        $user->login();
    }

    public function add()
    {

    }

    public function logOut()
    {

    }
}

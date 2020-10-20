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
}

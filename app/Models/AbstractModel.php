<?php

namespace App\Models;

abstract class AbstractModel
{
    function generateCode()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
        $code = "";
        $clean = strlen($chars) - 1;

        while (strlen($code) < 10) {
            $code .= $chars[mt_rand(0, $clean)];
        }

        return $code;
    }
}

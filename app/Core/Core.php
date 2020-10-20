<?php


namespace App\Core;


use App\Controllers\TaskController;
use App\Services\Route;

class Core
{

    public static function load()
    {
        global $ROUTS;
        $_SERVER['REQUEST_METHOD'];
        $_SERVER['REQUEST_URI'];

        $routeBlocks = $ROUTS[$_SERVER['REQUEST_METHOD']];

        foreach ($routeBlocks as $routeBlock) {

            if ($routeBlock['path'] === $_SERVER['REQUEST_URI']) {

                $controllerName = 'App\Controllers\\' . $routeBlock['controller'];
                $controller = new $controllerName;
                $funcName = $routeBlock['func'];
                print_r($controller->$funcName());

            }
        }
        /*Route::call();*/
    }
}
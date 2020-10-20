<?php

use App\Services\Route;

Route::make('/task/add', 'POST', 'TaskController', 'add');
Route::make('/task/delete', 'DELETE', 'TaskController', 'delete');
Route::make('/task/update', 'PUT', 'TaskController', 'update');
Route::make('/task/list', 'GET', 'TaskController', 'list');
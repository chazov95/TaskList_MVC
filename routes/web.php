<?php

if (isset ($_POST['login']) && !empty($_POST['login'])){
    $login = $_POST['login'];

    $userController = new UserController();
    $result = $userController->login();
}

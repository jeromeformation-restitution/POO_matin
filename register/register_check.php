<?php
require ('../autoloader.php');
require ('form_function.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){//vérification du formulaire
    $errorMessageUserName = checkPostText('name', 128);
    $errorMessageUserEmail = checkPostText('email', 255);
    $errorMessageUserPassword = checkPostText('password', 100);

    if (empty($errorMessageUserName)&& empty($errorMessageUserEmail)&& empty ($errorMessageUserPassword)){
        $database = new Database();
        $database->connect();
        $user = new User();
        $user->setUserName($_POST['name']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $retour = $user->getSqlParams();
        $sql = "INSERT INTO app_user (name, email, password) VALUES ($retour)";
        $success = $database->exec($sql);

    } else {
        var_dump('ERROR !');
    }









}



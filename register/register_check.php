<?php
require ('form_function.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){//vérification du formulaire
    $errorMessageUserName = checkPostText('name', 128);
    $errorMessageUserEmail = checkPostText('email', 255);
    $errorMessageUserPassword = checkPostText('password', 100);

    if (empty($errorMessageUserName)&& empty($errorMessageUserEmail)&& empty ($errorMessageUserPassword)){
        var_dump('On peut inscrire l\'utilisateur');
    } else {
        var_dump('ERROR !');
    }









}



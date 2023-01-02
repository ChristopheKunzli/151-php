<?php
/**
 * @file     users.php
 * @brief    File description
 * @author   Created by Christophe.KUNZLI
 * @version  02.12.2022
 */


function users(): void
{
    require 'view/users.php';
}

function login($post): void
{
    require_once 'models/userManager.php';

    $user = null;
    try {
        //retrieve data from the form
        $pass = $post["userPswd"];
        $mail = $post["email"];

        $hash = password_hash($pass, PASSWORD_DEFAULT);

        if (!userExists($mail, $hash)) {
            $msg = "email ou mot de passe erronné";
            require 'view/users.php';
        } else {
            session_start();
            setcookie("email", $mail);

            header("Location: ../index?action=home");
        }

    } catch (PDOException $ex) {
        $error = $ex;
    }
}
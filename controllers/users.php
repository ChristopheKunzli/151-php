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
function console_log($output, $with_script_tags = true): void
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

function login($post): void
{
    require_once 'models/userManager.php';

    $user = null;
    try {
        //retrieve data from the form
        $pass = $post["userPswd"];
        $mail = $post["email"];

        $user = getUser($mail);

        if ($user == null || !password_verify($pass, $user["userHashPsw"])) {
            $msg = "email ou mot de passe erronné";
            require 'view/users.php';
        } else {
            session_start();
            setcookie("email", $mail);
            if($user["isAdmin"] == 1){
                setcookie("admin", true);
            }
            header("Location: ../index?action=home");
        }

    } catch (PDOException $ex) {
        $error = $ex;
    } finally {
    }
}

function logout(): void
{
    //destroy manually both cookies that were created when logging in
    setcookie("email", "", -2040);
    setcookie("PHPSESSID", "", -2040);
    setcookie("admin", "", -2040);

    session_destroy();
    header("Location: ../index?action=home");
}
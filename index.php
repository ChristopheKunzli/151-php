<?php

//===========================================================================//
//controllers
//===========================================================================//

require 'controllers/navigation.php'; //home and error
require 'controllers/users.php';
require 'controllers/articles.php';
require 'controllers/management.php';

//===========================================================================//

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'home':
            home();
            break;
        case 'login':
            login($_POST);
            break;
        case 'contact':
            users();
            break;
        case 'logout':
            logout();
            break;
        case 'product':
            displayArticles();
            break;
        case 'product-detail':
            displayArticleDetail();
            break;
        case 'gestion':
            if (isset($_COOKIE["email"]) && isset($_COOKIE["admin"])) {
                management();
            } else {
                header("Location: index.php?action=home");
            }
            break;
        case 'add':
            if (isset($_COOKIE["email"]) && isset($_COOKIE["admin"])) {
                add($_POST, $_FILES);
            } else {
                header("Location: index.php?action=home");
            }
            break;
        case 'edit':
            if (isset($_COOKIE["email"]) && isset($_COOKIE["admin"])) {
                $_POST["code"] = $_GET["code"];
                $_POST["isEdit"] = true;
                add($_POST);
            } else {
                header("Location: index.php?action=home");
            }
            break;
        case 'update':
            if (isset($_COOKIE["email"]) && isset($_COOKIE["admin"])) {
                update($_POST, $_FILES);
                management();
            } else {
                header("Location: index.php?action=home");
            }
            break;
        case 'delete':
            if (isset($_COOKIE["email"]) && isset($_COOKIE["admin"])) {
                delete();
                management();
            } else {
                header("Location: index.php?action=home");
            }
            break;
        default:
            lost();
    }
} else {
    home();
}

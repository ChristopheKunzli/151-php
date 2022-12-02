<?php

//===========================================================================//
//controllers
//===========================================================================//

require 'controllers/navigation.php'; //home and error
require 'controllers/users.php';
require 'controllers/articles.php';

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
        case 'product':
            displayArticles();
            break;
        default:
            lost();
    }
} else {
    home();
}

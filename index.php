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
            login();
            break;
        case 'contact':
            users();
            break;
        case 'product':
            displayArticles();
            break;
        case 'product-detail':
            displayArticleDetail();
            break;
        default:
            lost();
    }
} else {
    home();
}

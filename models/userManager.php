<?php
/**
 * @file     userManager.php
 * @brief    File description
 * @author   Created by Christophe.KUNZLI
 * @version  09.12.2022
 */
function getUsers() : array | null
{
    $query = "SELECT userEmailAddress, userHashPsw, pseudo FROM users";

    require_once 'models/dbConnector.php';

    return executeQuerySelect($query);
}
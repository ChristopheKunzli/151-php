<?php
/**
 * @file     userManager.php
 * @brief    Used to manage users
 * @author   Created by Christophe.KUNZLI
 * @version  09.12.2022
 */


function getUser($address): array|null
{
    $query = "SELECT userEmailAddress, userHashPsw, isAdmin FROM users WHERE userEmailAddress = '" . $address . "'";

    require_once 'models/dbConnector.php';

    return executeQuerySelect($query)[0];
}

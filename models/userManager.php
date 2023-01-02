<?php
/**
 * @file     userManager.php
 * @brief    File description
 * @author   Created by Christophe.KUNZLI
 * @version  09.12.2022
 */

/**
 * Fetches all users in the database
 * @param $address
 * @param $password
 * @return bool
 */
function userExists($address, $password): bool
{
    $query = "SELECT userEmailAddress, userHashPsw, pseudo FROM users WHERE userEmailAddress = '" . $address . "' AND userHashPsw = '" . $password . "'";

    require_once 'models/dbConnector.php';

    return count(executeQuerySelect($query)) == 0;
}
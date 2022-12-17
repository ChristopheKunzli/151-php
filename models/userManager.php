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
 * @return array|null
 */
function getUser($address) : array | null
{
    $query = "SELECT userEmailAddress, userHashPsw, pseudo FROM users WHERE userEmailAddress = '". $address. "'";

    require_once 'models/dbConnector.php';

    return executeQuerySelect($query);
}
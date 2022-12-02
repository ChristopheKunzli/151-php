<?php
/**
 * @file     articlesManager.php
 * @brief    File description
 * @author   Created by Christophe.KUNZLI
 * @version  02.12.2022
 */

/**
 * Fetch all articles from DB
 * @return array|null
 */
function getArticles(): array|null
{
    $query = "SELECT code, brand, model, snowsLength, price, qtyAvailable, photo, active FROM snows";

    require_once 'models/dbConnector.php';

    return executeQuerySelect($query);
}
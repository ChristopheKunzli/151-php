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
    $query = "SELECT id, code, brand, model, snowLength, dailyPrice, qtyAvailable, photo, 'active' FROM snows";

    require_once 'models/dbConnector.php';

    return executeQuerySelect($query);
}

function getArticle($id): array|null
{
    $query = "SELECT * FROM snows WHERE id = " . $id;
    require_once 'models/dbConnector.php';
    return executeQuerySelect($query);
}

function deleteArticle($id): void
{
    $query = "DELETE FROM snows WHERE id = " . $id;
    require_once 'models/dbConnector.php';
    executeQueryDeleteOrInsert($query);
}
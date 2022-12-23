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

function getActiveArticles()
{
    $query = "SELECT id, code, brand, model, snowLength, dailyPrice, qtyAvailable, photo, 'active' FROM snows WHERE active = 1";
    require_once 'models/dbConnector.php';
    return executeQuerySelect($query);
}

function getArticle($id): array|null
{
    $query = "SELECT * FROM snows WHERE id = " . $id;
    require_once 'models/dbConnector.php';
    return executeQuerySelect($query);
}

function articleExists($code): bool
{
    $query = "SELECT code FROM snows WHERE code = '" . $code . "'";
    require_once 'models/dbConnector.php';
    return isset(executeQuerySelect($query)[0]);
}

function deleteArticle($id): void
{
    $query = "UPDATE snows SET active = 0 WHERE id = " . $id;
    require_once 'models/dbConnector.php';
    executeQueryDeleteOrInsert($query);
}

function addArticle($values): void
{
    $code = $values["code"];
    $brand = $values["brand"];
    $model = $values["model"];
    $length = $values["snowLength"];
    $qty = $values["qtyAvailable"];
    $desc = $values["description"];
    $price = $values["dailyPrice"];
    $active = $values["active"];

    //if(isset($values["photo"])){ }

    $query =
        "INSERT INTO snows (code,brand,model,snowLength,qtyAvailable,description,dailyPrice,active) " .
        "VALUES ('" . $code . "','" . $brand . "','" . $model . "','" . $length . "','" . $qty . "','" . $desc . "','" . $price . "','" . $active . "');";
    require_once 'models/dbConnector.php';
    executeQueryDeleteOrInsert($query);
}
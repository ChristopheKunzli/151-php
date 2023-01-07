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

function getActiveArticles(): array|null
{
    $query = "SELECT id, code, brand, model, snowLength, dailyPrice, qtyAvailable, photo, 'active' FROM snows WHERE active = 1";
    require_once 'models/dbConnector.php';
    return executeQuerySelect($query);
}

function getArticle($code): array|null
{
    $query = "SELECT * FROM snows WHERE code = '" . $code . "'";
    require_once 'models/dbConnector.php';
    return executeQuerySelect($query);
}

function articleExists($code): bool
{
    $query = "SELECT code FROM snows WHERE code = '" . $code . "'";
    require_once 'models/dbConnector.php';
    return isset(executeQuerySelect($query)[0]);
}

function deleteArticle($code): void
{
    $query = "UPDATE snows SET active = 0 WHERE code = '" . $code . "'";
    require_once 'models/dbConnector.php';
    executeQueryDeleteOrInsert($query);
}

function addArticle($values, $files = null): void
{
    $code = $values["code"];
    $brand = $values["brand"];
    $model = $values["model"];
    $length = $values["snowLength"];
    $qty = $values["qtyAvailable"];
    $desc = $values["description"];
    $price = $values["dailyPrice"];
    $active = $values["active"];

    $photo = "";

    if ($files["photo"]["name"] != "") {
        $target_dir = "view/content/images/";
        $filename = basename($files["photo"]["name"]);
        $target_file = $target_dir . $filename;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $photo .= "view/content/images/" . $filename;

        if (isset($_POST["submit"])) {
            $check = getimagesize($files["photo"]["tmp_name"]);
        }

        move_uploaded_file($files["photo"]["tmp_name"], $target_file);
    }
    $query =
        "INSERT INTO snows (code,brand,model,snowLength,qtyAvailable,description,dailyPrice,active,photo) " .
        "VALUES ('" . $code . "','" . $brand . "','" . $model . "','" . $length . "','" . $qty . "','" . $desc . "','" . $price . "','" . $active . "','" . $photo . "');";
    require_once 'models/dbConnector.php';
    executeQueryDeleteOrInsert($query);
}

function updateArticle($values, $files = null): void
{
    $code = $values["code"];
    $brand = $values["brand"];
    $model = $values["model"];
    $length = $values["snowLength"];
    $qty = $values["qtyAvailable"];
    $desc = $values["description"];
    $price = $values["dailyPrice"];
    $active = $values["active"];

    $photo = "";

    console_log($files);
    console_log($values);

    if ($files["photo"]["name"] != "") {
        $target_dir = "view/content/images/";
        $filename = basename($files["photo"]["name"]);
        $target_file = $target_dir . $filename;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $photo .= "view/content/images/" . $filename;

        if (isset($_POST["submit"])) {
            $check = getimagesize($files["photo"]["tmp_name"]);
        }

        move_uploaded_file($files["photo"]["tmp_name"], $target_file);
    }

    $query = "UPDATE snows SET code = '" . $code . "', brand = '" . $brand . "', model = '" . $model . "', snowLength = '" . $length . "', qtyAvailable = '" . $qty . "', description = '" . $desc . "', dailyPrice = '" . $price . "', active = '" . $active . "', photo = '" . $photo . "' WHERE code = '" . $code. "'";

    console_log($query);

    require_once 'models/dbConnector.php';
    executeQueryDeleteOrInsert($query);
}
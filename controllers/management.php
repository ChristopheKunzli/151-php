<?php
/**
 * @file     management.php
 * @brief    File description
 * @author   Created by Christophe.KUNZLI
 * @version  15.12.2022
 */
function management(): void
{
    $articles = null;
    try {
        require_once 'models/articlesManager.php';
        $articles = getArticles();
    } catch (ModelDataBaseException $ex) {
        $articlesErrorMessage = "Nous rencontrons des problèmes techniques pour afficher les produits" . $ex;
    } finally {
        require("view/management.php");
    }
}
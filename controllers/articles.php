<?php
/**
 * @file     articles.php
 * @brief    File description
 * @author   Created by Christophe.KUNZLI
 * @version  02.12.2022
 */
function displayArticles(): void
{
    $articles = null;
    try {
        require_once 'models/articlesManager.php';
        $articles = getArticles();
    } catch (ModelDataBaseException $ex) {
        $articlesErrorMessage = "Nous rencontrons des problèmes techniques pour afficher les produits" . $ex;
    } finally {
        require("view/articles.php");
    }
}

function displayArticleDetail(): void
{
    $article = null;
    try {
        require_once 'models/articlesManager.php';
        $article = getArticle($_GET["id"])[0];
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons des problèmes techniques pour afficher le produit" . $ex;
        echo "<h1>".$articleErrorMessage."</h1>";
    } finally {
        require("view/article-detail.php");
    }
}
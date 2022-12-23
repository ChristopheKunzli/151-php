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
        $articles = getActiveArticles();
    } catch (ModelDataBaseException $ex) {
        $articlesErrorMessage = "Nous rencontrons des problèmes techniques pour afficher les produits" . $ex;
    } finally {
        require("view/management.php");
    }
}

function delete(): void
{
    try {
        require_once 'models/articlesManager.php';
        deleteArticle($_GET["id"]);
    } catch (ModelDataBaseException $ex) {
        $articlesErrorMessage = "Nous rencontrons des problèmes techniques pour supprimmr les produits" . $ex;
    }
}

function update($post)
{
    try {
        require_once 'models/articlesManager.php';
        updateArticle($post);
    } catch (ModelDataBaseException $ex) {
        $articlesErrorMessage = "Nous rencontrons des problèmes techniques pour ajouter le produit" . $ex;
    }
}

function add($post, $files = null): void
{
    if (isset($post["isEdit"])) {
        require_once 'models/articlesManager.php';
        $article = getArticle($post["id"])[0];
        require 'view/addArticle.php';
        return;
    }

    if (!isset($post["code"])) {
        require 'view/addArticle.php';
        return;
    }
    try {
        require_once 'models/articlesManager.php';
        if (!articleExists($post["code"])) {
            addArticle($post, $files);
            header('Location: ../index.php?action=gestion');
        } else {
            $message = "Il exist déjà un article avec ce code";
            $article = $post;
            require 'view/addArticle.php';
            return;
        }
    } catch (ModelDataBaseException $ex) {
        $articlesErrorMessage = "Nous rencontrons des problèmes techniques pour ajouter le produit" . $ex;
    }
}
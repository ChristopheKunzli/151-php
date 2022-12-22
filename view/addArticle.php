<?php
/**
 * @file     addArticle.php
 * @brief    Contains the form used to add a snow to the db
 * @author   Created by Christophe.KUNZLI
 * @version  16.12.2022
 */

$title = "snows - ajout";
ob_start();
?>
    <section id="addForm" class="w-75 centered">
        <h2 class="m-t-32 m-b-32">Nouvel article</h2>
        <h3><?php if (isset($message)) echo $message; ?></h3>
        <form method="post" action="../index.php?action=add">
            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="code" placeholder="Code"
                       value="<?php if (isset($article['code'])) echo $article['code']; ?>" required>
            </div>

            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="brand" placeholder="Marque"
                       value="<?php if (isset($article['brand'])) echo $article['brand']; ?>" required>
            </div>

            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="model" placeholder="Modèle"
                       value="<?php if (isset($article['model'])) echo $article['model']; ?>" required>
            </div>

            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="snowLength"
                       placeholder="Longueur en cm"
                       value="<?php if (isset($article['snowLength'])) echo $article['snowLength']; ?>" required>
            </div>

            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="qtyAvailable"
                       placeholder="Quantité disponible"
                       value="<?php if (isset($article['qtyAvailable'])) echo $article['qtyAvailable']; ?>" required>
            </div>

            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="description"
                       placeholder="Description"
                       value="<?php if (isset($article['description'])) echo $article['description']; ?>" required>
            </div>

            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="dailyPrice"
                       placeholder="Prix journalier"
                       value="<?php if (isset($article['dailyPrice'])) echo $article['dailyPrice']; ?>" required>
            </div>

            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="number" min="0" max="1" name="active"
                       placeholder="Actif " value="<?php if (isset($article['active'])) echo $article['active']; ?>"
                       required>
            </div>

            <div class="bo4 of-hidden size15 m-b-20">
                <input class="sizefull s-text7 p-l-22 p-r-22" type="file" name="photo">
            </div>

            <input type="submit" value="Ajouter"
                   class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4 w-size12"><br>
            <input type="reset" value="Annuler" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4 w-size12">

        </form>

    </section>


<?php
$content = ob_get_clean();
require 'gabarit.php';
?>
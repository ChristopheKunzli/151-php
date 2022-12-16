<?php
/**
 * @file    articles-admin.php
 * @brief   File description
 * @author  Created by Pascal.BENZONANA
 * @version 15.12.2022
 */

$title = "SnowPoint - Gestion des snows ";

ob_start();
?>


    <!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m"
             style="background-image: url(view/content/images/home_slide_2.jpg);">
        <h2 class="l-text2 t-center">
            Gestion des articles
        </h2>
    </section>

    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">

                <!-- Article's List -->
                <section class="cart bgwhite p-t-70 p-b-100">
                    <div class="container">

                        <?php if (isset($articleErrorMessage)) : ?>
                            <h5><span style="color:red"><?= $articleErrorMessage; ?></span></h5>
                        <?php else : ?>
                            <!-- Article List -->
                            <div class="container-table-cart pos-relative">
                                <div class="wrap-table-shopping-cart bgwhite">
                                    <table id="cart" class="table-shopping-cart">
                                        <tr class="table-head">
                                            <th class="column-1">Article</th>
                                            <th class="column-2">Photo</th>
                                            <th class="column-2">Modèle</th>
                                            <th class="column-2">Longueur</th>
                                            <th class="column-2">Prix à l'unité</th>
                                            <th class="column-2">Quantité</th>
                                            <th class="column-2"><a href="../index.php?action=add">
                                                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Ajouter
                                                    </button>
                                                </a></th>
                                        </tr>
                                        <?php foreach ($articles as $article) : ?>

                                            <tr id="B101" class="table-row">
                                                <td class="column-1"><?= $article['code']; ?></td>
                                                <td class="column-2">
                                                    <div class="cart-img-product b-rad-4 o-f-hidden">
                                                        <?php if (isset($article["photo"]) && is_file($article['photo'])) : ?>
                                                            <img src="<?= $article['photo']; ?>"
                                                                 alt="<?= $article['code']; ?>" alt="IMG-PRODUCT">
                                                        <?php else : ?>
                                                            <img src="view/content/images/no_image_snow_small.png"
                                                                 alt="no image" alt="IMG-PRODUCT">
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                                <td class="column-2"><?= $article['model']; ?></td>
                                                <td class="column-2"><?= $article['snowLength']; ?> cm</td>
                                                <td class="column-2"><?= $article['dailyPrice']; ?> CHF</td>
                                                <td class="column-2"><?= $article['qtyAvailable']; ?></td>

                                                <td class="column-2">
                                                    <a href="../index.php?action=delete&id=<?= $article['id']; ?>"
                                                       class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        <img src="view/content/images/icons/bin2.png" alt="delete">
                                                        </button></a><br>
                                                    <a href="../index.php?action=update&id=<?= $article['id'] ?>">
                                                        <button onclick="updateItem('<?= $article['code']; ?>')"
                                                                class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                                            <img src="view/content/images/icons/pencil2.png"
                                                                 alt="update">
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <!-- End of list item -->
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>

                        <?php endif; ?>
                </section>
            </div>
        </div>
    </section>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>